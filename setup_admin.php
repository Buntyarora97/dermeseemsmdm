<?php
require_once 'config.php';

$db = getDBConnection();

if (!$db) {
    die("Database connection failed. Please check config.php");
}

try {
    // 1. Create admin_users table if not exists
    $db->exec("CREATE TABLE IF NOT EXISTS admin_users (
        id SERIAL PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password_hash VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        last_login TIMESTAMP DEFAULT NULL
    )");

    // 2. Insert default admin if not exists
    $username = 'admin';
    $password = 'Dermessence@2025'; // Strong default password
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare("SELECT id FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    if (!$stmt->fetch()) {
        $stmt = $db->prepare("INSERT INTO admin_users (username, password_hash) VALUES (?, ?)");
        $stmt->execute([$username, $hash]);
        echo "Default admin created successfully!<br>";
    } else {
        echo "Admin user already exists.<br>";
    }

    // 3. Create other necessary tables
    $db->exec("CREATE TABLE IF NOT EXISTS contacts (
        id SERIAL PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(20),
        subject VARCHAR(255),
        message TEXT,
        ip_address VARCHAR(45),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    $db->exec("CREATE TABLE IF NOT EXISTS email_logs (
        id SERIAL PRIMARY KEY,
        recipient VARCHAR(100),
        subject VARCHAR(255),
        email_type VARCHAR(50),
        status VARCHAR(20),
        sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    echo "All tables verified/created successfully.";

} catch (Exception $e) {
    die("Error initializing database: " . $e->getMessage());
}
?>
