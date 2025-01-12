<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkUser = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header('Location: homepage.php');
        exit();
    } else {
        echo "Invalid username or password";
    }
}

?>