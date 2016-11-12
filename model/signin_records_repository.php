<?php

/*  
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: signin_records_repository.php 
 * Date and Time: Nov 10, 2016 11:23:29 PM 
 * Project Name: CS556_Team_Project 
 */ 

class SignIn_RecordsRepository {
    
    public static function getSignInRecords() {
        // return all records as an array
    }
    
    public static function getSignInRecordById($id) {
        // return one record by id, or NULL if no match
    }
    
    public static function getSignInRecordsByChildId($childId) {
        // return all records match the child id, or NULL if no match
    }
    
    public static function getSignInRecordsByDate($initialDate, $finalDate) {
        // 1. return all records between a period of date, or NULL if no match
        // 2. if $finalDate === NULL, than return all records within the $initialDate, or NULL if no match
    }
    
    public static function deleteSignInRecordById($id) {
        // remove one record from DB, return 1 if record remove successed or 0 if failed
    }
    
    public static function addSignInRecord($signInRecord) {
        // take a $signInRecord as parameter
        // insert into DB and return the "id" as integer which auto assign by the database
        // or return 0 if insert failed
    }
}

