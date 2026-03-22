<?php
require 'config.php';
try {
  $db = getDBConnection();
  echo "DB OK. Server: " . $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
} catch(Exception $e) {
  echo "DB ERROR: " . $e->getMessage();
}
