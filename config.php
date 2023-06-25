<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBNAME', 'demo'); // Database name

/* connect to MySQL database */
$db = mysql_connect(DBSERVER, DBUSERNAME, DBNAME);

// Check db connection

if($db == false){
    die("Error: connection error. " . mysql_connect_error());
}
?>