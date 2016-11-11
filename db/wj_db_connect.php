<?php

/* 
 * Student Info: Name=wei jin, ID=9983
 * Subject: Course526_HWN1_fall_2016
 * Author: yewuy
 * Filename: db_connect.php
 * Date and Time: Nov 9, 2016 4:39:08 PM
 * Project Name: iphoneproject
 */
$dsn = 'mysql:host=localhost;dbname=daycaredb';
$username = 'admin';
$password = 'pass@word';

try {
    $db = new PDO($dsn, $username, $password);
    echo 'Connected.';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}
       
?>
