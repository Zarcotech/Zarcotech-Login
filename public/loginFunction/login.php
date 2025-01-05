<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();

$servername = "localhost;
$port = "81";
$username = "root";
$password = "zidan123";
$dbname = "Zarcotech_Users";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($pass, $row['password'])) {
            $_SESSION['username'] = $user;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Invalid Username or Password'); window.location.href='../index.html';</script>";
        }
    } else {
        echo "<script>alert('Invalid Username or Password'); window.location.href='../index.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
