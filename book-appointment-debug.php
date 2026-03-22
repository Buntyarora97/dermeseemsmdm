<?php
// book-appointment-debug.php (POST simulator)
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/book-appointment.php';

$post = [
    'name' => 'Debug Tester',
    'email' => 'debug+' . time() . '@example.com',
    'phone' => '9123456789',
    'age' => '30',
    'service' => 'Test Service',
    'preferred_date' => date('Y-m-d', strtotime('+2 days')),
    'preferred_time' => '11:00',
    'notes' => 'Debug run',
    'honeypot' => ''
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($post),
        'timeout' => 20
    ],
];

$context  = stream_context_create($options);
echo "<h3>POSTing to: $url</h3><pre>";
$result = @file_get_contents($url, false, $context);
if ($result === false) {
    $err = error_get_last();
    echo "Request failed: " . ($err['message'] ?? 'unknown') . "\n";
    if (!empty($http_response_header)) {
        echo "\nResponse headers:\n";
        print_r($http_response_header);
    }
} else {
    echo "Response:\n\n";
    echo htmlspecialchars($result);
}
echo "</pre>";

