<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ===============================
    // 🔐 GOOGLE reCAPTCHA VERIFY
    // ===============================

    $recaptcha_secret = "6LcPuHAsAAAAAOMNctGKoqaKZgzYsx-39YW9us1P";

    if (empty($_POST['g-recaptcha-response'])) {
        die("Please verify captcha.");
    }

    $verify_response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret="
        . $recaptcha_secret .
        "&response=" . $_POST['g-recaptcha-response']
    );

    $response_data = json_decode($verify_response);

    if (!$response_data->success) {
        die("Captcha verification failed.");
    }

    // ===============================
    // 🔐 CLEAN SPAM PROTECTION
    // ===============================

    if (!empty($_POST['website_url'])) {
        die("Spam detected.");
    }

    $form_type = $_POST['form_type'] ?? 'general';
    $name = trim($_POST['name'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $email = trim($_POST['email'] ?? 'N/A');
    $age = $_POST['age'] ?? 'N/A';
    $city = $_POST['city'] ?? 'N/A';
    $date = $_POST['date'] ?? 'N/A';
    $time = $_POST['time'] ?? 'N/A';
    $service = $_POST['service'] ?? 'N/A';
    $description = trim($_POST['description'] ?? '');

    if (empty($name) || empty($mobile) || empty($description)) {
        die("Required fields missing.");
    }

    if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $name)) {
        die("Invalid name format.");
    }

    if (!preg_match("/^[6-9]\d{9}$/", $mobile)) {
        die("Invalid mobile number.");
    }

    if ($email !== "N/A" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    if (preg_match('/https?:\/\/|www\./i', $description)) {
        die("Links are not allowed.");
    }

    if (strlen($description) < 10) {
        die("Please enter proper details.");
    }

    // ===============================
    // SAVE DATA
    // ===============================

    $created_at = date('Y-m-d H:i:s');

    $new_submission = [
        'id' => uniqid(),
        'type' => $form_type,
        'name' => htmlspecialchars($name),
        'mobile' => htmlspecialchars($mobile),
        'email' => htmlspecialchars($email),
        'age' => htmlspecialchars($age),
        'city' => htmlspecialchars($city),
        'date' => htmlspecialchars($date),
        'time' => htmlspecialchars($time),
        'service' => htmlspecialchars($service),
        'description' => htmlspecialchars($description),
        'created_at' => $created_at
    ];

    $data_dir = __DIR__ . '/../data';
    if (!file_exists($data_dir)) mkdir($data_dir, 0777, true);
    $file_path = $data_dir . '/submissions.json';

    $current_data = file_exists($file_path) ? json_decode(file_get_contents($file_path), true) : [];
    if (!is_array($current_data)) $current_data = [];
    $current_data[] = $new_submission;

    file_put_contents($file_path, json_encode($current_data, JSON_PRETTY_PRINT));

    // ===============================
    // SEND EMAIL
    // ===============================

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 's.drbrar@gmail.com';
        $mail->Password   = 'ilju nrrd rkkl pjfr';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('s.drbrar@gmail.com', 'Dermessence Clinic');
        $mail->addAddress('s.drbrar@gmail.com');

        $mail->isHTML(true);
        $subject = ($form_type == 'booking') ? "New Booking - Dermessence" : "New Contact Inquiry - Dermessence";
        $mail->Subject = $subject;

        $body = "<div style='font-family: Arial; padding: 20px;'>";
        $body .= "<h2>$subject</h2>";
        $body .= "<p><b>Name:</b> $name</p>";
        $body .= "<p><b>Mobile:</b> $mobile</p>";
        if($form_type == 'contact') $body .= "<p><b>Email:</b> $email</p>";
        if($form_type == 'booking') {
            $body .= "<p><b>Age:</b> $age</p>";
            $body .= "<p><b>City:</b> $city</p>";
            $body .= "<p><b>Date:</b> $date</p>";
            $body .= "<p><b>Time:</b> $time</p>";
            $body .= "<p><b>Service:</b> $service</p>";
        }
        $body .= "<p><b>Details:</b><br>$description</p>";
        $body .= "</div>";

        $mail->Body = $body;
        $mail->send();

        echo "<script>alert('Submitted successfully!'); window.location.href='/';</script>";

    } catch (Exception $e) {
        echo "<script>alert('Saved locally but mail error.'); window.location.href='/';</script>";
    }
}
?>