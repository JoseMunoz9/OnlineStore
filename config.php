<?php

// Start the session:
session_start();

// Initializing variables:
$db_server  = "localhost";    // Database server
$db_user    = "root";         // Database username
$db_pass    = "";             // Database password
$db_name    = "bigcomshop";   // Database name


/* connect to MySQL database */
 $db = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
 
 // Check db connection:
if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>