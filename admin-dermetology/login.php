<?php
session_start();

$admin_username = "Dermessence";
$admin_password = "Dermessence@#000#@"; // change this

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body{font-family:Arial;background:#f5f5f5;display:flex;justify-content:center;align-items:center;height:100vh}
        .login-box{background:#fff;padding:30px;border-radius:8px;box-shadow:0 5px 20px rgba(0,0,0,0.1);width:300px}
        input{width:100%;padding:10px;margin:10px 0}
        button{width:100%;padding:10px;background:#007bff;color:#fff;border:none}
        .error{color:red;font-size:14px}
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>