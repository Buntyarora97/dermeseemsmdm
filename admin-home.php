
<?php
// Initialize database on first visit
require_once 'config.php';

if (!file_exists(__DIR__ . '/.db_initialized')) {
    try {
        if (function_exists('initializeDatabase')) {
            initializeDatabase();
            file_put_contents(__DIR__ . '/.db_initialized', 'done');
        }
    } catch (Exception $e) {
        error_log("Database initialization error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermessence Clinic - Admin Panel System</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600&family=Gilda+Display&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #C49A47;
        }
        body {
            font-family: 'Barlow', sans-serif;
            background: linear-gradient(135deg, #fffbe6 0%, #f7e6c2 100%);
            margin: 0;
            padding: 50px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 800px;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(196, 154, 71, 0.2);
            text-align: center;
        }
        h1 {
            font-family: 'Gilda Display', serif;
            color: var(--gold);
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .link-card {
            background: linear-gradient(135deg, #fffbe6, #f7e6c2);
            padding: 30px;
            border-radius: 15px;
            border-left: 4px solid var(--gold);
            text-decoration: none;
            color: #333;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .link-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(196, 154, 71, 0.3);
        }
        .link-card h3 {
            color: var(--gold);
            margin: 0 0 10px 0;
            font-size: 1.5rem;
        }
        .link-card p {
            margin: 0;
            color: #666;
        }
        .admin-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 40px;
            background: linear-gradient(90deg, var(--gold) 60%, #FFD700 100%);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .admin-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(196, 154, 71, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏥 Dermessence Clinic</h1>
        <p style="font-size: 1.2rem; color: #666;">Dr. Sukhmani Jugpal Brar - Admin Panel System</p>
        
        <div class="links">
            <a href="contact.html" class="link-card">
                <h3>💬 Contact Us</h3>
                <p>Send a message or inquiry</p>
            </a>
            
            <a href="book-appointment.html" class="link-card">
                <h3>📅 Book Appointment</h3>
                <p>Schedule a consultation</p>
            </a>
        </div>
        
        <a href="admin/login.php" class="admin-btn">
            🔐 Admin Login
        </a>
        
        <div style="margin-top: 40px; padding: 20px; background: #f9f9f9; border-radius: 10px;">
            <p style="margin: 0; color: #999; font-size: 0.9rem;">
                <strong>System Status:</strong> ✅ Ready<br>
                Database: <?php echo file_exists(__DIR__ . '/.db_initialized') ? '✅ Initialized' : '⚠️ Pending'; ?>
            </p>
        </div>
    </div>
</body>
</html>
