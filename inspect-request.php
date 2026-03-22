<?php
// inspect-request.php — debug helper
header('Content-Type: text/plain; charset=utf-8');

echo "=== REQUEST META ===\n";
echo "Request Method: " . ($_SERVER['REQUEST_METHOD'] ?? '') . "\n";
echo "Request URI: " . ($_SERVER['REQUEST_URI'] ?? '') . "\n";
echo "Host: " . ($_SERVER['HTTP_HOST'] ?? '') . "\n\n";

echo "=== HEADERS ===\n";
if (!empty($_SERVER)) {
    foreach ($_SERVER as $k => $v) {
        if (strpos($k, 'HTTP_') === 0) {
            echo $k . ": " . $v . "\n";
        }
    }
}
echo "\n=== RAW POST DATA (php://input) ===\n";
$raw = file_get_contents('php://input');
echo ($raw === '' ? '[empty]' : $raw) . "\n\n";

echo "=== \$_POST ARRAY ===\n";
if (!empty($_POST)) {
    print_r($_POST);
} else {
    echo "[empty]\n";
}
