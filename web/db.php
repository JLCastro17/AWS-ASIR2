<?php
define('DB_SERVER', 'shingeki.chbxdcsvoowl.eu-west-3.rds.amazonaws.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '**********');
define('DB_DATABASE', 'shingeki');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$database = mysqli_select_db($connection, DB_DATABASE);
?>
