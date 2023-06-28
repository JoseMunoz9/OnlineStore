<?php

error_reporting(0);

// Start session
session_start();

// Check if the user is not logged in, then redirect the user to the login page:
    if(!isset($_SESSION["lastname"]) !== true) {
       header('location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Welcome <?php echo $_SESSION["firstname"]; ?>!</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://kit.fontawesome.com/bad3a99581.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <li><a href="logout.php">Sign Out</a></li>
        <h1>Hello, <strong><?php echo $_SESSION["firstname"]; ?></strong>! Welcome to BigCommerce.</h1>
        <h2>Who We Are & What We Do</h2>
    </body>
</html>