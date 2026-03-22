<?php
session_start();          // Session start
session_unset();          // Session variables remove
session_destroy();        // Session destroy

header("Location: login.php");  // Login page पर redirect
exit;
?>