<?php

/*  
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: yewuy 
 * Filename: dbcontext.php 
 * Date and Time: Nov 20, 2016 6:04:01 PM 
 * Project Name: CS556_Team_Project 
 */ 
class DBContext {

    private static $dsn = 'mysql:host=localhost;dbname=daycaredb';
    private static $username = 'admin';
    private static $passwd = 'pass@word';
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$passwd);
            } catch (PDOException $ex) {
                $error_message = $ex->getMessage();
                include('../errors/datebase_error.php');
                exit();
            }
        }
        return self::$db;
    }

}
