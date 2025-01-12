<?php

session_start();
include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #e74c3c;
            font-size: 36px;
        }
        p {
            font-size: 18px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚧 Under Construction 🚧</h1>
        <p>Hello <?php 
        
        if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
        } else {
            echo "there";
        }

        ?></p>
        <p>We're working hard to bring you something amazing. Please check back soon!</p>
        <form action="logout.php">
            <input type="submit" value="Logout">
        </form>
    </div>
</body>
</html>
