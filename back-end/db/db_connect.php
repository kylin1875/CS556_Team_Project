<?php

/*  
 * Student Info: Name=Wei Jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Wei Jin 
 * Filename: db_connect.php 
 * Date and Time: Nov 20, 2016 5:12:08 PM 
 * Project Name: CS556_Team_Project 
 */ 
$dsn = 'mysql:host=localhost;dbname=daycaredb';
$username = 'root';
$password = 'johnson5414';

try {
    $db = new PDO($dsn, $username, $password);
    echo 'Connected.';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}
        
?>
