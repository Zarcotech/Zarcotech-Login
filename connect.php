<?php

$host = "localhost";
$port = 81;
$user = "root";
$pass = "zidan123";
$db = "Zarcotech_Users";
$conn = new mysqli($host, $port, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

?>