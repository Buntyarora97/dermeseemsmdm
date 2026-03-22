<?php
// show-logs.php - diagnostic helper (temporary)
// Save in same folder as book-appointment.php and config.php, then open in browser.
// Remove this file after debugging.

header('Content-Type: text/plain; charset=utf-8');

$base = __DIR__ . DIRECTORY_SEPARATOR;
echo "Diagnostic run at " . date('Y-m-d H:i:s') . "\n\n";

// files to check
$files = [
    'book-appointment.php' => $base . 'book-appointment.php',
    'config.php' => $base . 'config.php',
    'booking-response-ui.php' => $base . 'booking-response-ui.php',
];

foreach ($files as $label => $path) {
    echo "File: $label\n";
    echo " Path: $path\n";
    echo " Exists: " . (file_exists($path) ? 'YES' : 'NO') . "\n";
    if (file_exists($path)) {
        echo " Size: " . filesize($path) . " bytes\n";
        echo " Perms: " . substr(sprintf('%o', fileperms($path)), -4) . "\n";
    }
    echo str_repeat('-', 50) . "\n";
}

// ensure logs dir
$logdir = $base . 'logs';
echo "Logs directory: $logdir\n";
echo " Exists: " . (is_dir($logdir) ? 'YES' : 'NO') . "\n";
if (is_dir($logdir)) {
    echo " Perms: " . substr(sprintf('%o', fileperms($logdir)), -4) . "\n";
}
echo str_repeat('=', 60) . "\n\n";

// Tail helper
function tailFile($path, $lines = 80) {
    if (!file_exists($path)) {
        return "MISSING: $path\n";
    }
    $data = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($data === false) return "Could not read $path\n";
    $total = count($data);
    $start = max(0, $total - $lines);
    $slice = array_slice($data, $start);
    return implode("\n", $slice) . "\n";
}

// check our logs
$logFiles = [
    'appointment_errors.log' => $logdir . '/appointment_errors.log',
    'mail_failed.log' => $logdir . '/mail_failed.log',
    'email_debug.log' => $logdir . '/email_debug.log',
    'email_send.log' => $logdir . '/email_send.log',
    'submissions.log' => $logdir . '/submissions.log'
];

foreach ($logFiles as $label => $path) {
    echo "---- Last lines of $label ----\n";
    echo tailFile($path, 80);
    echo str_repeat('-', 40) . "\n\n";
}

// Try common PHP error log location (Hostinger)
$possible = [
    __DIR__ . '/error_log',
    '/home/u848520183/public_html/error_log',
    '/var/log/php_errors.log',
    '/var/log/apache2/error.log'
];

foreach ($possible as $p) {
    echo "Checking server error log: $p\n";
    if (file_exists($p)) {
        echo "---- tail of $p ----\n";
        echo tailFile($p, 120);
    } else {
        echo "Not found: $p\n";
    }
    echo str_repeat('=', 40) . "\n";
}

echo "\nNow please run the POST test again (book-appointment-debug.php) and paste its output here.\n";
echo "Also paste the exact content returned by this script.\n";
