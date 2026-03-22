<?php
require_once 'config.php';

if (!file_exists(__DIR__ . '/.db_initialized')) {
    if (function_exists('initializeDatabase')) {
        initializeDatabase();
        file_put_contents(__DIR__ . '/.db_initialized', 'done');
    }
}

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_ip = $_SERVER['REMOTE_ADDR'] ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? '0.0.0.0');

    if (isRateLimited($user_ip)) {
        $error_message = 'Too many requests. Please wait before submitting another appointment request.';
    } else {
        if (!empty($_POST['honeypot'])) {
            header('Location: book-appointment.html');
            exit;
        }

        $name = sanitizeInput($_POST['name'] ?? '');
        $email = sanitizeInput($_POST['email'] ?? '');
        $phone = sanitizeInput($_POST['phone'] ?? '');
        $age = sanitizeInput($_POST['age'] ?? '');
        $service = sanitizeInput($_POST['service'] ?? '');
        $preferred_date = sanitizeInput($_POST['preferred_date'] ?? '');
        $preferred_time = sanitizeInput($_POST['preferred_time'] ?? '');
        $notes = sanitizeInput($_POST['notes'] ?? '');

        $errors = [];

        if (empty($name) || strlen($name) < 2) {
            $errors[] = 'Name is required and must be at least 2 characters long.';
        }

        if (empty($email) || !isValidEmail($email)) {
            $errors[] = 'A valid email address is required.';
        }

        if (empty($phone) || !isValidPhone($phone)) {
            $errors[] = 'A valid phone number is required.';
        }

        if (empty($service)) {
            $errors[] = 'Please select a service.';
        }

        if (empty($preferred_date)) {
            $errors[] = 'Please select a preferred date.';
        } else {
            $selected_date = strtotime($preferred_date);
            $tomorrow = strtotime('+1 day');
            if ($selected_date < $tomorrow) {
                $errors[] = 'Please select a date that is at least tomorrow.';
            }
        }

        if (empty($preferred_time)) {
            $errors[] = 'Please select a preferred time.';
        }

        if (empty($errors)) {
            try {
                $db = getDBConnection();
                $stmt = $db->prepare("INSERT INTO appointments (name, email, phone, age, service, preferred_date, preferred_time, notes, ip_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$name, $email, $phone, $age ?: null, $service, $preferred_date, $preferred_time, $notes, $user_ip]);

                // DB insert OK — set success now
                $success_message = 'Thank you for your appointment request! Dr. Sukhmani\'s team will contact you within 24 hours to confirm your appointment.';

                // Prepare email body (same as before)
                $to = TO_EMAIL;
                $email_subject = "🏥 New Appointment Request - " . SITE_NAME;

                $body = "
                <!DOCTYPE html><html><head><meta charset='UTF-8'></head><body>
                <h2>New Appointment Request</h2>
                <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                <p><strong>Service:</strong> " . htmlspecialchars($service) . "</p>
                <p><strong>Preferred:</strong> " . htmlspecialchars($preferred_date) . " at " . htmlspecialchars($preferred_time) . "</p>
                <p><strong>Notes:</strong><br>" . nl2br(htmlspecialchars($notes)) . "</p>
                <p>IP: " . htmlspecialchars($user_ip) . "</p>
                </body></html>";

                // Try to send email, but do NOT let email failure block success
                $mailResult = sendEmail($to, $email_subject, $body, $email);
                if (!$mailResult) {
                    // Log mail failure
                    $logDir = __DIR__ . '/logs';
                    if (!is_dir($logDir)) mkdir($logDir, 0755, true);
                    $logMsg = date('Y-m-d H:i:s') . " | Mail failed for appointment (name: {$name}, email: {$email}, phone: {$phone})\n";
                    file_put_contents($logDir . '/mail_failed.log', $logMsg, FILE_APPEND | LOCK_EX);

                    // Also insert a record into email_logs if table exists (safe try/catch)
                    try {
                        $stmt2 = $db->prepare("INSERT INTO email_logs (recipient, subject, email_type, status) VALUES (?, ?, 'appointment_notification', 'failed')");
                        $stmt2->execute([$to, $email_subject]);
                    } catch (Exception $e) {
                        // ignore
                    }
                } else {
                    // log success to email_logs
                    try {
                        $stmt3 = $db->prepare("INSERT INTO email_logs (recipient, subject, email_type, status) VALUES (?, ?, 'appointment_notification', 'sent')");
                        $stmt3->execute([$to, $email_subject]);
                    } catch (Exception $e) {
                        // ignore
                    }
                }

            } catch (Exception $e) {
                error_log("Appointment booking error: " . $e->getMessage());
                if (defined('DEBUG_MODE') && DEBUG_MODE) {
                    $error_message = 'Debug: ' . htmlspecialchars($e->getMessage());
                } else {
                    $error_message = 'Sorry, there was an error processing your request. Please try again.';
                }
            }
        } else {
            $error_message = implode('<br>', $errors);
        }
    }
}

// (Then include the same HTML response UI as your original file)
?>
<!-- paste the HTML UI code from your original file below this line (the response container) -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Booking Response</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>/* minimal styling to make result show if you want, you can keep your original styles */</style>
</head>
<body>
<?php if (!empty($success_message)): ?>
  <h2>Success</h2>
  <p><?php echo $success_message; ?></p>
<?php elseif (!empty($error_message)): ?>
  <h2>Error</h2>
  <p><?php echo $error_message; ?></p>
<?php else: ?>
  <p>Access directly via the booking form.</p>
<?php endif; ?>
</body>
</html>
