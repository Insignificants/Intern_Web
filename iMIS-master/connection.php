<?php
$host = 'inventory-db.ci8vjilkvded.us-east-1.rds.amazonaws.com'; // replace with your endpoint
$db   = 'cloudDB'; // replace with your database name
$user = 'admin'; // replace with your username
$pass = 'lab-password'; // replace with your password

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);
?>
