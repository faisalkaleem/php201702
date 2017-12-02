<?php
include 'inc/config.php';
include 'inc/helper.php';
//echo session_status();
//exit;
//session_start(); // no need for this as its added in config.php
//echo session_status();
//exit;
//echo session_id();
//if(!isset($_COOKIE['PHPSESSID'])) {
//    
//}
if(!isset($_SESSION['id'])) {
    $_SESSION['id'] = 1;
    $_SESSION['name'] = 'Faisal';
} else {
    echo 'Welcome '. $_SESSION['name'];
}

if(!isset($_COOKIE['first_visit'])) {
    setcookie('first_visit', 'yes'); // used to set cookie value
    setcookie('mycookie', 'My Cookie Value', time()+1*60); // used to set cookie value
} else {
    if(!isset($_COOKIE['mycookie'])) {
       echo 'You have spent a minute';
       setcookie('mycookie', 'My Cookie Value', time()+2*60); // used to set cookie value
    }
}


//setcookie('mycookie', $_SERVER, time()+10000);
//printR($_SERVER);
printR($_COOKIE); // $_COOKIE is used to fetch value of cookie.

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

