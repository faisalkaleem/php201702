<?php
include 'db.php';
include 'helper.php';
$sql = 'SELECT * FROM student';
$result = mysqli_query($connection, $sql);
echo '<table border="1">';
echo '<tr><th>ID</th><th>Name</th><th>DOB</th><th>Class</th></tr>';
while(($record = mysqli_fetch_assoc($result))) {
//    printR($record);
    echo "<tr><td>".$record['id']."</td><td>".$record['name']."</td><td>".$record['dob']."</td><td>".$record['class']."</td></tr>";
}
echo '</table>';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

