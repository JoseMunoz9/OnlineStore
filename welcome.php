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

    <ul class="navbar">
    <li><a href="#about">About Us</a></li>
    <li><a href="#values">Company Values</a></li>
    <li><a href="#others">Other</a></li>
    <li><a href="logout.php">Sign Out</a></li>
    </ul>

    <h1>Hello, <strong><?php echo $_SESSION["firstname"]; ?></strong>! Welcome to BigCommerce.</h1>
    
    <!--About Us section-->
    <section class="about" id="about">
        <div class="about-text">
            <h2>Who We Are & What We Do</h2>
            <p>BigCommerce's mission is to help merchants sell more at every stage of growth, 
            from small startups, to mid-market businesses, 
            to large enterprises. As a leading Open SaaS solution, 
            BigCommerce empowers merchants to build, innovate and grow their businesses online. 
            Simply put, we focus on being the best commerce platform so our customers can focus 
            on what matters most: growing their businesses.</p>
            <p>Learn more about our growing </p><a href="https://www.bigcommerce.com/company/awards/">industry-wide recognition.</a>
        </div>
    </section>

    <!--Other section-->
    </body>
</html>