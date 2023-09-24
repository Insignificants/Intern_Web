<?php
// Replace with your AWS MariaDB credentials
$host = '34.201.142.83'; // AWS MariaDB public IPv4 address
$username = 'admin'; // Your MariaDB username
$password = 'lab-password'; // Your MariaDB password
$database = 'imis'; // Your MariaDB database name

// Create a connection to the AWS MariaDB database
$con = mysqli_connect($host, $username, $password, $database);
?>
