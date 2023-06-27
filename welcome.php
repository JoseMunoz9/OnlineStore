<?php
require_once('config.php');
require_once('session.php');
// Start session
session_start();

// Check if the user is not logged in, then redirect the user to login page
if(!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true){
    header("location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/bad3a99581.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Hello, shopping lovers.</h1>
    <h2>Welcome to Bigcommerce</h2>
    <a href="logout.php">Log Out</a>
</body>
</html>