<?php
/*
 * ==========================
 *  Dermessence Clinic Config
 * ==========================
 * Author: Bunty (GN Health / Dermessence Project)
 * Notes:
 * - Works on Replit with PostgreSQL
 * - Works on Hostinger with MySQL
 */

session_start();

define('DEBUG_MODE', true);
define('SITE_NAME', 'Dermessence Clinic Chandigarh');
define('TO_EMAIL', 's.drbrar@gmail.com');
define('FROM_ADDRESS', 'noreply@thedermessence.com');

date_default_timezone_set('Asia/Kolkata');

define('MAX_REQUESTS_PER_HOUR', 100);
define('MIN_TIME_BETWEEN_REQUESTS', 5);

if (DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

// ==================================================
//  DATABASE CONNECTION (Supports PostgreSQL & MySQL)
// ==================================================
function getDBConnection() {
    static $pdo = null;
    if ($pdo) return $pdo;

    // 1. Try Replit PostgreSQL (DATABASE_URL)
    $database_url = getenv('DATABASE_URL');
    if ($database_url) {
        $parsed = parse_url($database_url);
        $host = $parsed['host'] ?? 'localhost';
        $port = $parsed['port'] ?? 5432;
        $dbname = ltrim($parsed['path'] ?? '', '/');
        $user = $parsed['user'] ?? '';
        $pass = $parsed['pass'] ?? '';
        
        $query = [];
        if (isset($parsed['query'])) {
            parse_str($parsed['query'], $query);
        }
        $sslmode = $query['sslmode'] ?? 'prefer';
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=$sslmode";
    } 
    else {
        // 2. Fallback to Hostinger MySQL Configuration
        // UPDATE THESE WITH YOUR HOSTINGER DB DETAILS
        $host = 'localhost';
        $dbname = 'u848520183_Dermassence';
        $user = 'u848520183_Dermassence'; // Check your Hostinger DB user
        $pass = 'Bunty@97296';   // Check your Hostinger DB password
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    }
    
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
        return $pdo;
    } catch (PDOException $e) {
        $msg = "Database Connection Failed: " . $e->getMessage();
        error_log($msg);
        if (DEBUG_MODE) {
            // die("<h2>DB Error</h2><pre>$msg</pre>");
            return null; // Don't crash, allow email to work
        } else {
            return null;
        }
    }
}

// ==================================================
//  ADMIN AUTHENTICATION
// ==================================================
function isAdminLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function requireAdminLogin() {
    if (!isAdminLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

function adminLogin($username, $password) {
    try {
        $db = getDBConnection();
        if (!$db) return false;
        
        $stmt = $db->prepare("SELECT * FROM admin_users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];
            $_SESSION['admin_id'] = $user['id'];
            
            $stmt = $db->prepare("UPDATE admin_users SET last_login = CURRENT_TIMESTAMP WHERE id = ?");
            $stmt->execute([$user['id']]);
            
            return true;
        }
    } catch (Exception $e) {
        error_log("Admin login error: " . $e->getMessage());
    }
    return false;
}

// ==================================================
//  SANITIZATION HELPERS
// ==================================================
function sanitizeInput($input) {
    if (!isset($input)) return '';
    $s = trim(strip_tags($input));
    return str_replace(["\r", "\n"], ' ', $s);
}

function isValidEmail($email) {
    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidPhone($phone) {
    $digits = preg_replace('/\D+/', '', $phone);
    return preg_match('/^[6-9]\d{9}$/', $digits);
}

// ==================================================
//  LOGGING HELPERS
// ==================================================
function ensureLogDir() {
    $dir = __DIR__ . '/logs';
    if (!is_dir($dir)) mkdir($dir, 0755, true);
    return $dir;
}

function writeLog($file, $text) {
    $dir = ensureLogDir();
    $f = rtrim($dir, '/\\') . '/' . $file;
    $line = "[" . date('Y-m-d H:i:s') . "] " . $text . PHP_EOL;
    file_put_contents($f, $line, FILE_APPEND | LOCK_EX);
}

// ==================================================
//  EMAIL SENDER
// ==================================================
function sendEmail($to, $subject, $htmlBody, $replyTo = null) {
    if (defined('IS_REPLIT') && IS_REPLIT) {
        writeLog('email_debug.log', "To: $to | Subj: $subject");
        return true;
    }

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . SITE_NAME . " <" . FROM_ADDRESS . ">\r\n";
    if ($replyTo && isValidEmail($replyTo)) {
        $headers .= "Reply-To: $replyTo\r\n";
    }

    $sent = mail($to, $subject, $htmlBody, $headers);
    writeLog('email_send.log', "To:$to | Status:" . ($sent ? 'sent' : 'failed'));
    return $sent;
}

// ==================================================
//  RATE LIMIT SYSTEM
// ==================================================
function isRateLimited($ip) {
    $file = ensureLogDir() . '/submissions.log';
    $now = time();
    $hourAgo = $now - 3600;

    $recent = [];
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $parts = explode('|', $line);
            if (count($parts) >= 2) {
                $lIp = $parts[0];
                $lTime = (int)$parts[1];
                if ($lIp === $ip && $lTime > $hourAgo) $recent[] = $lTime;
            }
        }
    }

    if (count($recent) >= MAX_REQUESTS_PER_HOUR) return true;
    if (!empty($recent) && ($now - max($recent)) < MIN_TIME_BETWEEN_REQUESTS) return true;

    file_put_contents($file, "$ip|$now\n", FILE_APPEND | LOCK_EX);
    return false;
}
?>
