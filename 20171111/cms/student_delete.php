<?php
require 'inc/db.php';
echo 'Are you sure? You want to delete student.';
echo '<a href="student_delete.php?confirm=y&id='.$_GET['id'].'">Yes</a> <a href="students.php">No</a>';
if(isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm']=='y') {
    $sql = "DELETE FROM student WHERE id=".$_GET['id'];
    if(mysqli_query($connection, $sql)) {
        header("Location:students.php?message=Student delete successfully.");
    }
}
//else {
//    echo 'Invalid request';
//}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

