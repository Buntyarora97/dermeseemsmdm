<?php
require_once '../config.php';
requireAdminLogin();

$action = $_GET['action'] ?? '';
$id = $_GET['id'] ?? 0;

if (!$action || !$id) {
    header('Location: index.php');
    exit;
}

try {
    $db = getDBConnection();
    
    switch ($action) {
        case 'approve':
            // Get appointment details
            $stmt = $db->prepare("SELECT * FROM appointments WHERE id = ?");
            $stmt->execute([$id]);
            $appointment = $stmt->fetch();
            
            if ($appointment && $appointment['status'] == 'pending') {
                // Update status
                $stmt = $db->prepare("UPDATE appointments SET status = 'approved', updated_at = NOW() WHERE id = ?");
                $stmt->execute([$id]);
                
                // Send email to customer
                $subject = "✅ Appointment Confirmed - Dermessence Clinic";
                $body = "
                <html>
                <body style='font-family: Arial, sans-serif;'>
                    <h2 style='color: #C49A47;'>Appointment Confirmed!</h2>
                    <p>Dear " . htmlspecialchars($appointment['name']) . ",</p>
                    <p>Your appointment has been <strong>approved</strong> and confirmed.</p>
                    <div style='background: #f9f9f9; padding: 20px; border-left: 4px solid #C49A47; margin: 20px 0;'>
                        <p><strong>Date:</strong> " . date('l, F j, Y', strtotime($appointment['preferred_date'])) . "</p>
                        <p><strong>Time:</strong> " . htmlspecialchars($appointment['preferred_time']) . "</p>
                        <p><strong>Service:</strong> " . htmlspecialchars($appointment['service']) . "</p>
                    </div>
                    <p>Please arrive 10 minutes early for your appointment.</p>
                    <p>For any questions, contact us at +91-9013607766</p>
                    <p>Best regards,<br>Dermessence Clinic Team</p>
                </body>
                </html>";
                
                sendEmail($appointment['email'], $subject, $body);
                sendEmail(TO_EMAIL, "Appointment Approved - ID #$id", $body);
                
                header('Location: index.php?tab=appointments&msg=approved');
            }
            break;
            
        case 'reject':
            $reason = $_GET['reason'] ?? 'No reason provided';
            
            $stmt = $db->prepare("SELECT * FROM appointments WHERE id = ?");
            $stmt->execute([$id]);
            $appointment = $stmt->fetch();
            
            if ($appointment) {
                $stmt = $db->prepare("UPDATE appointments SET status = 'rejected', admin_notes = ?, updated_at = NOW() WHERE id = ?");
                $stmt->execute([$reason, $id]);
                
                $subject = "❌ Appointment Not Available - Dermessence Clinic";
                $body = "
                <html>
                <body style='font-family: Arial, sans-serif;'>
                    <h2 style='color: #C49A47;'>Appointment Update</h2>
                    <p>Dear " . htmlspecialchars($appointment['name']) . ",</p>
                    <p>We regret to inform you that your requested appointment for <strong>" . date('F j, Y', strtotime($appointment['preferred_date'])) . "</strong> at <strong>" . htmlspecialchars($appointment['preferred_time']) . "</strong> is not available.</p>
                    <div style='background: #ffebee; padding: 20px; border-left: 4px solid #d32f2f; margin: 20px 0;'>
                        <p><strong>Reason:</strong> " . htmlspecialchars($reason) . "</p>
                    </div>
                    <p>Please call us at +91-9013607766 to schedule an alternative time that works for you.</p>
                    <p>Best regards,<br>Dermessence Clinic Team</p>
                </body>
                </html>";
                
                sendEmail($appointment['email'], $subject, $body);
                sendEmail(TO_EMAIL, "Appointment Rejected - ID #$id - Reason: $reason", $body);
                
                header('Location: index.php?tab=appointments&msg=rejected');
            }
            break;
            
        case 'reschedule':
            $newDate = $_GET['date'] ?? '';
            $newTime = $_GET['time'] ?? '';
            
            if ($newDate && $newTime) {
                $stmt = $db->prepare("SELECT * FROM appointments WHERE id = ?");
                $stmt->execute([$id]);
                $appointment = $stmt->fetch();
                
                if ($appointment) {
                    $stmt = $db->prepare("UPDATE appointments SET status = 'rescheduled', original_date = preferred_date, original_time = preferred_time, preferred_date = ?, preferred_time = ?, updated_at = NOW() WHERE id = ?");
                    $stmt->execute([$newDate, $newTime, $id]);
                    
                    $subject = "📅 Appointment Rescheduled - Dermessence Clinic";
                    $body = "
                    <html>
                    <body style='font-family: Arial, sans-serif;'>
                        <h2 style='color: #C49A47;'>Appointment Rescheduled</h2>
                        <p>Dear " . htmlspecialchars($appointment['name']) . ",</p>
                        <p>Your appointment has been rescheduled to a new date and time.</p>
                        <div style='background: #fff3cd; padding: 20px; border-left: 4px solid #856404; margin: 20px 0;'>
                            <p><strong>Previous:</strong> " . date('F j, Y', strtotime($appointment['preferred_date'])) . " at " . htmlspecialchars($appointment['preferred_time']) . "</p>
                        </div>
                        <div style='background: #d1ecf1; padding: 20px; border-left: 4px solid #0c5460; margin: 20px 0;'>
                            <p><strong>New Date:</strong> " . date('l, F j, Y', strtotime($newDate)) . "</p>
                            <p><strong>New Time:</strong> " . htmlspecialchars($newTime) . "</p>
                            <p><strong>Service:</strong> " . htmlspecialchars($appointment['service']) . "</p>
                        </div>
                        <p>Please arrive 10 minutes early for your appointment.</p>
                        <p>For any questions, contact us at +91-9013607766</p>
                        <p>Best regards,<br>Dermessence Clinic Team</p>
                    </body>
                    </html>";
                    
                    sendEmail($appointment['email'], $subject, $body);
                    sendEmail(TO_EMAIL, "Appointment Rescheduled - ID #$id", $body);
                    
                    header('Location: index.php?tab=appointments&msg=rescheduled');
                }
            }
            break;
            
        case 'update_contact':
            $status = $_GET['status'] ?? 'read';
            $stmt = $db->prepare("UPDATE contacts SET status = ?, updated_at = NOW() WHERE id = ?");
            $stmt->execute([$status, $id]);
            header('Location: index.php?tab=contacts&msg=updated');
            break;
            
        default:
            header('Location: index.php');
            break;
    }
} catch (Exception $e) {
    error_log("Admin action error: " . $e->getMessage());
    header('Location: index.php?error=action_failed');
}
?>
