<?php
$host = 'sql312.infinityfree.com'; // your InfinityFree DB host
$user = 'if0_41045206';           // your DB username
$pass = ' DnbTmnA6gkPXrdz';           // your DB password
$dbname = 'if0_41045206_studregg_db';           // your DB name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

