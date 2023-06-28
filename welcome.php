<?php
// Start session
session_start();

// Check if the user is not logged in, then redirect the user to the login page:
    if(!isset($_SESSION["email"]) !== true){
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
        <h1>Hello, <?php echo $_SESSION["firstname"]; ?>! Welcome to BigCommerce.</h1>
        <h2>Welcome to Bigcommerce</h2>
        <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sign Out</a>
    </body>
</html>