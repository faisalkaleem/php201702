<?php
$host = 'localhost';
$user  = 'root';
$password = '';
//$database = ''
$connection = mysqli_connect($host, $user, $password);
//$connection_b = mysqli_connect('192.44.3.2', $user, $password);
var_dump($connection);
$result = mysqli_query($connection, 'SHOW DATABASES;');
echo '<pre>';
print_r($result);
if($result) {
    $row = mysqli_fetch_($result);
    print_r($row);
}
