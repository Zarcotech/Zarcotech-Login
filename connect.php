<?php

$host = "localhost";
$user = "root";
$pass = "zidan123";
$db = "Zarcotech_Users";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

?>