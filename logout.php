<?php

session_start();
session_destroy();
// header("location: ./login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogOut</title>
    <style>
        .center{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }
    </style>
</head>
<body>
    <div class="center">
        <h1>You have been logged out.</h1>
        <a href="./login.php">Login</a>
    </div>
</body>
</html>