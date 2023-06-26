<?php

$db_server = "localhost"; // Database server
$db_user = "root";        // Database username
$db_pass = "";            // Database password
$db_name = "bigcomshop";  // Database name

// $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ' ;charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* connect to MySQL database */
 $db = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

 // Check db connection

 if($db == false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>