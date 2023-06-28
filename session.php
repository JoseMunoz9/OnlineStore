<?php

// Start session
session_start();

// If the user is already logged in, then redirect the user to the welcome page:
if(isset($_SESSION["email"]) && $_SESSION["email"] ===true){
    header("location: welcome.php");
    exit;
}

?>