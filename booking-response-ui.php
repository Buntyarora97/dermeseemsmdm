<?php
// booking-response-ui.php - simple response UI used by book-appointment.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Booking Response - Dermessence Clinic</title>
<style>
:root{--gold:#C49A47;}
body{margin:0;background:linear-gradient(90deg,#fffbe6 70%,#f7e6c2 100%);font-family:Arial, sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh;padding:20px;}
.container{max-width:600px;width:100%;background:#fff;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,0.08);overflow:hidden}
.header-success{background:linear-gradient(135deg,#2196F3,#1976D2);color:#fff;padding:28px;text-align:center}
.header-error{background:linear-gradient(135deg,#f44336,#d32f2f);color:#fff;padding:28px;text-align:center}
.content{padding:28px;text-align:center}
.btn{display:inline-block;background:linear-gradient(90deg,var(--gold) 60%,#FFD700 100%);color:#fff;padding:12px 20px;border-radius:25px;text-decoration:none;margin:6px}
.info{background:linear-gradient(135deg,#fffbe6,#f7e6c2);padding:16px;border-left:4px solid var(--gold);margin-top:16px;border-radius:8px;color:#333;text-align:left}
</style>
</head>
<body>
<div class="container">
    <?php if (!empty($success_message)): ?>
        <div class="header-success"><h1>Appointment Requested!</h1></div>
        <div class="content">
            <div style="font-size:48px">📅</div>
            <p><?php echo $success_message; ?></p>
            <div class="info"><strong>Next Steps:</strong><p>Our team will contact you to confirm the appointment within 24 hours.</p></div>
            <p><a class="btn" href="book-appointment.html">Book Another</a> <a class="btn" href="contact.html">Contact Us</a></p>
        </div>
    <?php elseif (!empty($error_message)): ?>
        <div class="header-error"><h1>Error Occurred</h1></div>
        <div class="content">
            <div style="font-size:48px">❌</div>
            <p><?php echo $error_message; ?></p>
            <div class="info"><strong>Call</strong><p>+91-9013607766 — Dermessence Clinic, Sector 16, Chandigarh</p></div>
            <p><a class="btn" href="book-appointment.html">Try Again</a> <a class="btn" href="contact.html">Contact Us</a></p>
        </div>
    <?php else: ?>
        <div class="header-error"><h1>Invalid Access</h1></div>
        <div class="content">
            <div style="font-size:48px">⚠️</div>
            <p>Please access this page through the booking form.</p>
            <p><a class="btn" href="book-appointment.html">Go to Booking Form</a></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
