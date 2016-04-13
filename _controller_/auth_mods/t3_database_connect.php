<?php

//Database Connection
$t3_db_server	= "localhost";
$t3_db_username = "root";
$t3_db_password = "root";
$t3_db_name 	= "t3nsor";

$connection = new mysqli($t3_db_server, $t3_db_username, $t3_db_password, $t3_db_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

date_default_timezone_set('Asia/Kolkata');
?>