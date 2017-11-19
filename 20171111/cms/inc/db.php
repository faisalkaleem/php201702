<?php
include 'config.php';
$host = 'localhost';
$user  = 'root';
$password = '';
$database = 'php201702';
$connection = @mysqli_connect($host, $user, $password, $database);
//mysqli_select_db($connection, $database);


