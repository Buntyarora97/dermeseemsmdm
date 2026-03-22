<?php
session_start();

$data_file = __DIR__ . '/../data/submissions.json';

// Get submissions
$submissions = file_exists($data_file)
    ? json_decode(file_get_contents($data_file), true)
    : [];

if (!is_array($submissions)) {
    $submissions = [];
}

$submissions = array_reverse($submissions); // Show latest first

$error = '';

// Handle Login
if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'Dermessence' && $password === 'Dermessence@#000#@') {
        $_SESSION['dermessence_logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid Credentials";
    }
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

$is_logged_in = isset($_SESSION['dermessence_logged_in']) && $_SESSION['dermessence_logged_in'] === true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermessence Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { background-color: #000; color: #d4af37; font-family: 'Poppins', sans-serif; margin: 0; padding: 0; }
        .card-login { background: #111; border: 1px solid #d4af37; width: 100%; max-width: 400px; box-shadow: 0 10px 40px rgba(212,175,55,0.2); border-radius: 16px; padding: 2rem; }
        .form-control { background: #000; border: 1px solid #d4af37; color: #fff; }
        .form-control:focus { background: #000; color: #fff; border-color: #fff; box-shadow: none; }
        .btn-gold { background: #d4af37; color: #000; font-weight: 700; border: none; letter-spacing: 1px; width: 100%; padding: 10px; }
        .btn-gold:hover { background: #fff; color: #000; }
        
        .sidebar { background: #000; color: #d4af37; padding-top: 20px; border-right: 1px solid #d4af37; min-height: 100vh; }
        .sidebar a { color: #d4af37; text-decoration: none; padding: 12px 20px; display: block; border-bottom: 1px solid #111; transition: 0.3s; }
        .sidebar a:hover { background: #d4af37; color: #000; }
        .content { padding: 30px; flex-grow: 1; }
        .header-box { background: #111; color: #d4af37; padding: 20px; border-radius: 12px; margin-bottom: 25px; border: 1px solid #d4af37; }
        .table { background: #111; color: #fff; border: 1px solid #333; margin-top: 20px; }
        .table thead { background: #d4af37; color: #000; }
        .table-hover tbody tr:hover { background: #1a1a1a; color: #d4af37; }
        .badge-booking { background: #d4af37 !important; color: #000 !important; font-weight: 700; }
        .badge-contact { background: #444 !important; color: #fff !important; }
    </style>
</head>
<body>

<?php if (!$is_logged_in): ?>
    <!-- LOGIN FORM -->
    <div style="display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 20px;">
        <div class="card-login">
            <h3 class="text-center mb-2" style="letter-spacing: 3px;">DERMESSENCE</h3>
            <p class="text-center text-muted small mb-4">ADMIN PORTAL</p>
            <form method="POST" action="index.php">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-gold">ACCESS DASHBOARD</button>
                <?php if($error): ?>
                    <p class="text-danger mt-3 text-center small"><?php echo $error; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
<?php else: ?>
    <!-- DASHBOARD -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0">
                <div class="sidebar">
                    <div class="text-center py-4">
                        <h5 style="letter-spacing: 2px;">DERMESSENCE</h5>
                    </div>
                    <hr style="border-color: #d4af37; margin: 0;">
                    <a href="index.php">DASHBOARD</a>
                    <a href="?logout=1">SIGN OUT</a>
                </div>
            </div>
            <div class="col-md-10 p-0">
                <div class="content">
                    <div class="header-box d-flex justify-content-between align-items-center">
                        <h2 class="m-0">Appointment Leads</h2>
                        <span class="badge badge-booking p-2">LIVE SYSTEM</span>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Category</th>
                                    <th>Patient Details</th>
                                    <th>Contact No</th>
                                    <th>Specialization</th>
                                    <th>Patient Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($submissions)): ?>
                                    <tr><td colspan="6" class="text-center py-4">No enquiries found.</td></tr>
                                <?php else: ?>
                                    <?php foreach ($submissions as $row): ?>
                                    <tr>
                                        <td><small class="text-muted"><?php echo htmlspecialchars($row['created_at'] ?? 'N/A'); ?></small></td>
                                        <td>
                                            <span class="badge <?php echo ($row['type'] ?? '') === 'booking' ? 'badge-booking' : 'badge-contact'; ?> px-3 py-2">
                                                <?php echo strtoupper($row['type'] ?? 'N/A'); ?>
                                            </span>
                                        </td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($row['name'] ?? 'N/A'); ?></strong>
                                            <?php if(($row['type'] ?? '') === 'booking'): ?>
                                                <div class="small text-muted">Age: <?php echo htmlspecialchars($row['age'] ?? 'N/A'); ?> | City: <?php echo htmlspecialchars($row['city'] ?? 'N/A'); ?></div>
                                            <?php endif; ?>
                                        </td>
                                        <td><a href="tel:<?php echo htmlspecialchars($row['mobile'] ?? ''); ?>" style="color: #d4af37; text-decoration: none;"><?php echo htmlspecialchars($row['mobile'] ?? 'N/A'); ?></a></td>
                                        <td>
                                            <?php if(($row['type'] ?? '') === 'booking'): ?>
                                                <span class="text-info"><?php echo htmlspecialchars($row['service'] ?? 'N/A'); ?></span>
                                            <?php else: ?>
                                                <small class="text-muted"><?php echo htmlspecialchars($row['email'] ?? 'N/A'); ?></small>
                                            <?php endif; ?>
                                        </td>
                                        <td><div style="max-width: 250px; font-size: 13px;"><?php echo htmlspecialchars($row['description'] ?? 'N/A'); ?></div></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

</body>
</html>
