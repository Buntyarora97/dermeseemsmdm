<?php
require_once '../config.php';
requireAdminLogin();

// Get query parameters
$tab = $_GET['tab'] ?? 'appointments';
$search = $_GET['search'] ?? '';
$status_filter = $_GET['status'] ?? '';

try {
    $db = getDBConnection();
    
    // Get appointments
    $apt_query = "SELECT * FROM appointments WHERE 1=1";
    $params = [];
    
    if ($search) {
        $apt_query .= " AND (name ILIKE ? OR email ILIKE ? OR phone ILIKE ?)";
        $search_param = "%$search%";
        $params = [$search_param, $search_param, $search_param];
    }
    
    if ($status_filter) {
        $apt_query .= " AND status = ?";
        $params[] = $status_filter;
    }
    
    $apt_query .= " ORDER BY preferred_date DESC, created_at DESC";
    
    $stmt = $db->prepare($apt_query);
    $stmt->execute($params);
    $appointments = $stmt->fetchAll();
    
    // Get contacts
    $contact_query = "SELECT * FROM contacts WHERE 1=1";
    $contact_params = [];
    
    if ($search) {
        $contact_query .= " AND (name ILIKE ? OR email ILIKE ? OR subject ILIKE ?)";
        $search_param = "%$search%";
        $contact_params = [$search_param, $search_param, $search_param];
    }
    
    $contact_query .= " ORDER BY created_at DESC";
    
    $stmt = $db->prepare($contact_query);
    $stmt->execute($contact_params);
    $contacts = $stmt->fetchAll();
    
    // Get statistics
    $stmt = $db->query("SELECT COUNT(*) as total, status FROM appointments GROUP BY status");
    $apt_stats = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    
    $stmt = $db->query("SELECT COUNT(*) as total, status FROM contacts GROUP BY status");
    $contact_stats = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    
} catch (Exception $e) {
    error_log("Admin dashboard error: " . $e->getMessage());
    $appointments = [];
    $contacts = [];
    $apt_stats = [];
    $contact_stats = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dermessence Clinic</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600&family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --gold: #C49A47;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Barlow', sans-serif;
            background: #f5f5f5;
        }
        
        .header {
            background: linear-gradient(135deg, var(--gold), #d4b366);
            color: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        h1 {
            font-family: 'Gilda Display', serif;
            font-size: 1.8rem;
        }
        
        .logout-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            transition: background 0.2s;
        }
        
        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }
        
        .container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            border-left: 4px solid var(--gold);
        }
        
        .stat-card h3 {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        
        .stat-card .number {
            color: var(--gold);
            font-size: 2rem;
            font-weight: bold;
        }
        
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .tab {
            padding: 12px 25px;
            background: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .tab.active {
            background: var(--gold);
            color: white;
        }
        
        .search-bar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .search-bar input,
        .search-bar select {
            padding: 10px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            flex: 1;
            min-width: 200px;
        }
        
        .search-bar button {
            padding: 10px 25px;
            background: var(--gold);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .table-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th {
            background: #f9f9f9;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #333;
            border-bottom: 2px solid #e0e0e0;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        tr:hover {
            background: #fafafa;
        }
        
        .status {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .status.pending {
            background: #fff3cd;
            color: #856404;
        }
        
        .status.approved {
            background: #d4edda;
            color: #155724;
        }
        
        .status.rejected {
            background: #f8d7da;
            color: #721c24;
        }
        
        .status.rescheduled {
            background: #d1ecf1;
            color: #0c5460;
        }
        
        .status.read {
            background: #e0e0e0;
            color: #333;
        }
        
        .status.completed {
            background: #d4edda;
            color: #155724;
        }
        
        .actions {
            display: flex;
            gap: 5px;
        }
        
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-approve {
            background: #28a745;
            color: white;
        }
        
        .btn-reject {
            background: #dc3545;
            color: white;
        }
        
        .btn-reschedule {
            background: #17a2b8;
            color: white;
        }
        
        .btn-view {
            background: #6c757d;
            color: white;
        }
        
        .no-data {
            text-align: center;
            padding: 40px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-content">
            <h1><i class="fas fa-clinic-medical"></i> Dermessence Admin Dashboard</h1>
            <div>
                <span style="margin-right: 20px;">Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
                <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="stats">
            <div class="stat-card">
                <h3>Pending Appointments</h3>
                <div class="number"><?php echo $apt_stats['pending'] ?? 0; ?></div>
            </div>
            <div class="stat-card">
                <h3>Approved Appointments</h3>
                <div class="number"><?php echo $apt_stats['approved'] ?? 0; ?></div>
            </div>
            <div class="stat-card">
                <h3>Total Contacts</h3>
                <div class="number"><?php echo array_sum($contact_stats); ?></div>
            </div>
            <div class="stat-card">
                <h3>Pending Contacts</h3>
                <div class="number"><?php echo $contact_stats['pending'] ?? 0; ?></div>
            </div>
        </div>
        
        <div class="tabs">
            <a href="?tab=appointments" class="tab <?php echo $tab == 'appointments' ? 'active' : ''; ?>">
                📅 Appointments
            </a>
            <a href="?tab=contacts" class="tab <?php echo $tab == 'contacts' ? 'active' : ''; ?>">
                💬 Contacts
            </a>
        </div>
        
        <div class="search-bar">
            <form method="GET" style="display: flex; gap: 10px; flex: 1; flex-wrap: wrap;">
                <input type="hidden" name="tab" value="<?php echo htmlspecialchars($tab); ?>">
                <input type="text" name="search" placeholder="Search by name, email, phone..." value="<?php echo htmlspecialchars($search); ?>">
                <?php if ($tab == 'appointments'): ?>
                <select name="status">
                    <option value="">All Statuses</option>
                    <option value="pending" <?php echo $status_filter == 'pending' ? 'selected' : ''; ?>>Pending</option>
                    <option value="approved" <?php echo $status_filter == 'approved' ? 'selected' : ''; ?>>Approved</option>
                    <option value="rejected" <?php echo $status_filter == 'rejected' ? 'selected' : ''; ?>>Rejected</option>
                    <option value="rescheduled" <?php echo $status_filter == 'rescheduled' ? 'selected' : ''; ?>>Rescheduled</option>
                </select>
                <?php endif; ?>
                <button type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
        </div>
        
        <?php if ($tab == 'appointments'): ?>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Contact</th>
                            <th>Service</th>
                            <th>Date & Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($appointments)): ?>
                            <tr><td colspan="7" class="no-data">No appointments found</td></tr>
                        <?php else: ?>
                            <?php foreach ($appointments as $apt): ?>
                                <tr>
                                    <td>#<?php echo $apt['id']; ?></td>
                                    <td><?php echo htmlspecialchars($apt['name']); ?></td>
                                    <td>
                                        <?php echo htmlspecialchars($apt['email']); ?><br>
                                        <small><?php echo htmlspecialchars($apt['phone']); ?></small>
                                    </td>
                                    <td><?php echo htmlspecialchars($apt['service']); ?></td>
                                    <td>
                                        <?php echo date('M d, Y', strtotime($apt['preferred_date'])); ?><br>
                                        <small><?php echo htmlspecialchars($apt['preferred_time']); ?></small>
                                    </td>
                                    <td><span class="status <?php echo $apt['status']; ?>"><?php echo ucfirst($apt['status']); ?></span></td>
                                    <td class="actions">
                                        <?php if ($apt['status'] == 'pending'): ?>
                                            <button class="btn btn-approve" onclick="approveAppointment(<?php echo $apt['id']; ?>)">✅ Approve</button>
                                            <button class="btn btn-reject" onclick="rejectAppointment(<?php echo $apt['id']; ?>)">❌ Reject</button>
                                            <button class="btn btn-reschedule" onclick="rescheduleAppointment(<?php echo $apt['id']; ?>)">📅 Reschedule</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($contacts)): ?>
                            <tr><td colspan="8" class="no-data">No contacts found</td></tr>
                        <?php else: ?>
                            <?php foreach ($contacts as $contact): ?>
                                <tr>
                                    <td>#<?php echo $contact['id']; ?></td>
                                    <td><?php echo htmlspecialchars($contact['name']); ?></td>
                                    <td>
                                        <?php echo htmlspecialchars($contact['email']); ?><br>
                                        <?php if ($contact['phone']): ?>
                                            <small><?php echo htmlspecialchars($contact['phone']); ?></small>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($contact['subject']); ?></td>
                                    <td><small><?php echo htmlspecialchars(substr($contact['message'], 0, 50)) . '...'; ?></small></td>
                                    <td><small><?php echo date('M d, Y H:i', strtotime($contact['created_at'])); ?></small></td>
                                    <td><span class="status <?php echo $contact['status']; ?>"><?php echo ucfirst($contact['status']); ?></span></td>
                                    <td class="actions">
                                        <button class="btn btn-view" onclick="viewContact(<?php echo $contact['id']; ?>, '<?php echo htmlspecialchars(addslashes($contact['message'])); ?>')">👁️ View</button>
                                        <?php if ($contact['status'] == 'pending'): ?>
                                            <button class="btn btn-approve" onclick="updateContactStatus(<?php echo $contact['id']; ?>, 'read')">Mark Read</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
    
    <script>
        function approveAppointment(id) {
            if (confirm('Approve this appointment and send confirmation email to the customer?')) {
                window.location.href = 'actions.php?action=approve&id=' + id;
            }
        }
        
        function rejectAppointment(id) {
            const reason = prompt('Please enter the reason for rejection:');
            if (reason) {
                window.location.href = 'actions.php?action=reject&id=' + id + '&reason=' + encodeURIComponent(reason);
            }
        }
        
        function rescheduleAppointment(id) {
            const newDate = prompt('Enter new date (YYYY-MM-DD):');
            if (newDate) {
                const newTime = prompt('Enter new time (e.g., 10:00 AM):');
                if (newTime) {
                    window.location.href = 'actions.php?action=reschedule&id=' + id + '&date=' + encodeURIComponent(newDate) + '&time=' + encodeURIComponent(newTime);
                }
            }
        }
        
        function updateContactStatus(id, status) {
            window.location.href = 'actions.php?action=update_contact&id=' + id + '&status=' + status;
        }
        
        function viewContact(id, message) {
            alert('Message:\n\n' + message);
        }
    </script>
</body>
</html>
