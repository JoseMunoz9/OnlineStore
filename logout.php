<?php
// Start session:
session_start();

// Destroy session
if(session_destroy()) {
    // Redirect to the login page:
    header("Location: login.php");
    exit;
}
?>