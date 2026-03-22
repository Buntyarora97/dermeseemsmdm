<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title>Admin Panel - Dermessence</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2><i class="fas fa-clinic-medical"></i> Dermessence</h2>
                <span>Admin Panel</span>
            </div>
            <nav class="sidebar-nav">
                <a href="#" class="nav-item active" data-tab="dashboard">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="#" class="nav-item" data-tab="bookings">
                    <i class="fas fa-calendar-check"></i> Booking Enquiries
                </a>
                <a href="#" class="nav-item" data-tab="contacts">
                    <i class="fas fa-envelope"></i> Contact Enquiries
                </a>
                
                <div class="admin-profile">
    <span>Admin</span>
    <div class="profile-avatar">A</div>
    <a href="logout.php" style="margin-left:15px;color:red;">Logout</a>
</div>
            
                
                
            </nav>
            <div class="sidebar-footer">
                <p>Dermessence Clinic</p>
                <small>Admin Dashboard v1.0</small>
            </div>
        </aside>

        <main class="main-content">
            <header class="top-header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 id="pageTitle">Dashboard</h1>
                </div>
                <div class="header-right">
                    <div class="admin-profile">
                        <span>Admin</span>
                        <div class="profile-avatar">A</div>
                    </div>
                </div>
            </header>

            <div class="content-area">
                <div id="dashboard" class="tab-content active">
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon booking">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="stat-info">
                                <h3 id="totalBookings">0</h3>
                                <p>Total Bookings</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon pending">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-info">
                                <h3 id="pendingBookings">0</h3>
                                <p>Pending Bookings</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon contact">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="stat-info">
                                <h3 id="totalContacts">0</h3>
                                <p>Contact Enquiries</p>
                            </div>
                        </div>
                        
                        <div class="stat-card">
                            <div class="stat-icon unread">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="stat-info">
                                <h3 id="unreadContacts">0</h3>
                                <p>Unread Messages</p>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-grid">
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3><i class="fas fa-calendar-check"></i> Recent Bookings</h3>
                                <a href="#" class="view-all" data-tab="bookings">View All</a>
                            </div>
                            <div class="card-body">
                                <div id="recentBookings" class="recent-list"></div>
                            </div>
                        </div>
                        <div class="dashboard-card">
                            <div class="card-header">
                                <h3><i class="fas fa-envelope"></i> Recent Enquiries</h3>
                                <a href="#" class="view-all" data-tab="contacts">View All</a>
                            </div>
                            <div class="card-body">
                                <div id="recentContacts" class="recent-list"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bookings" class="tab-content">
                    <div class="content-header">
                        <h2>Booking Enquiries</h2>
                        <div class="filter-controls">
                            <select id="bookingFilter">
                                <option value="all">All Status</option>
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                            <button class="btn-refresh" onclick="loadBookings()">
                                <i class="fas fa-sync-alt"></i> Refresh
                            </button>
                        </div>
                    </div>
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Service</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="bookingsTableBody"></tbody>
                        </table>
                    </div>
                    <div id="noBookings" class="no-data" style="display: none;">
                        <i class="fas fa-calendar-times"></i>
                        <p>No booking enquiries found</p>
                    </div>
                </div>
    <div id="contacts" class="tab-content">
                    <div class="content-header">
                        <h2>Contact Enquiries</h2>
                        <div class="filter-controls">
                            <select id="contactFilter">
                                <option value="all">All Status</option>
                                <option value="unread">Unread</option>
                                <option value="read">Read</option>
                                <option value="replied">Replied</option>
                            </select>
                            <button class="btn-refresh" onclick="loadContacts()">
                                <i class="fas fa-sync-alt"></i> Refresh
                            </button>
                        </div>
                    </div>
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="contactsTableBody"></tbody>
                        </table>
                    </div>
                    <div id="noContacts" class="no-data" style="display: none;">
                        <i class="fas fa-envelope-open"></i>
                        <p>No contact enquiries found</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="modal" id="detailModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Details</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body" id="modalBody"></div>
            <div class="modal-footer" id="modalFooter"></div>
        </div>
    </div>

    <script src="js/admin-script.js"></script>
</body>
</html>
