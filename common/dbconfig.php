<?php 
$mysqlun = "root";
$mysqlpw = "dbpass";
$dbhost = "localhost";
$dbname = "SLCCGardens";


// Create Connection
$dbLogin = new mysqli($dbhost, $mysqlun, $mysqlpw, $dbname);

// Check Connection
if ($dbLogin->connect_error) {
    die("Connection failed: " . $dbLogin->connect_error);
} 
?>
