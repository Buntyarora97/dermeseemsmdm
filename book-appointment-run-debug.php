<?php
// book-appointment-run-debug.php  — temporary debug runner
// Creates a POST environment and includes the real handler so we can see any fatal errors / exceptions.
// DELETE THIS FILE AFTER DEBUGGING.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Simulate a POST request (values similar to an actual form)
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST = [
  'name' => 'Debug Runner',
  'email' => 'debug+' . time() . '@example.com',
  'phone' => '9123456789',
  'age' => '30',
  'service' => 'Test Service',
  'preferred_date' => date('Y-m-d', strtotime('+2 days')),
  'preferred_time' => '11:00',
  'notes' => 'This is a debug test',
  'honeypot' => ''
];

// Capture output and exceptions
ob_start();
try {
    include __DIR__ . '/book-appointment.php';
} catch (Throwable $e) {
    // Output full exception details
    echo "=== Exception Caught ===\n";
    echo "Message: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " (line " . $e->getLine() . ")\n\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
$body = ob_get_clean();

// Print headers & body to help debugging (so book-appointment.php outputs too)
echo "===== DEBUG RUN OUTPUT BEGIN =====\n\n";
echo $body;
echo "\n\n===== DEBUG RUN OUTPUT END =====\n";
