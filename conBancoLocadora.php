<?php
$username = 'root';
$password = '';
try {
  $conn = new PDO("mysql:host=127.0.0.1;dbname=locadorablockbuster;port=3307", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
 ?>
