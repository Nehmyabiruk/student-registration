<?php
// db_connect.php - ready for InfinityFree / 42Web
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'sql312.infinityfree.com'; // your InfinityFree DB host
$dbname = 'if0_41045206_studregg_db'; // your DB name
$user = 'if0_41045206';             // your DB username
$pass = 'DnbTmnA6gkPXrdz';          // your DB password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
