<?php

/* 
 * Student Info: Name=wei jin, ID=9983
 * Subject: Course526_HWN1_fall_2016
 * Author: yewuy
 * Filename: db_context.php
 * Date and Time: Nov 9, 2016 4:39:20 PM
 * Project Name: iphoneproject
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