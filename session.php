<?php
// Start the session
session_start();

// If the user is already logged in, then redirect user to welcome page
if(isset($_SESSION["userid"]) && $_SESSION["userid"] === true){
    header("location: welcome.php");
    exit;
}
?>