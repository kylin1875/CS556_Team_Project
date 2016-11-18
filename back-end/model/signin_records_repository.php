<?php

/*  
 * Student Info: Name=Han Wu, ID=16327
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Han
 * Filename: signin_records_repository.php 
 * Date and Time: Nov 10, 2016 11:23:29 PM 
 * Project Name: CS556_Team_Project 
 */ 

class SignIn_RecordsRepository {
    
    public static function getSignInRecords() {
        // return all records as an array
	global $db;
        $query = “SELECT * FROM daycaredb.signin_records ORDER BY id”; 
        $result = $db->query($query);
        $signin_records = array();
        foreach ($result as $row) {
            $signin_records = new SigninRecords($row['id'], $row['child_id'], $row['parent_signature'], 
                    $row['sign_in_timestamp'], $row['sign_out_timestamp']);
            $signin_records[] = $signin_records;
        }
        return $signin_records;
    }
    
    public static function getSignInRecordById($id) {
        // return one record by id, or NULL if no match
 	global $db;
        $query = "SELECT * FROM daycaredb.signin_records WHERE id = $id";
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        $row = $result->fetch();
        $signin_record = new SigninRecords($row['id'], $row['child_id'], 			$row['parent_signature'], $row['sign_in_timestamp'], 			$row['sign_out_timestamp']);
        return $signin_record;
    }
    
    public static function getSignInRecordsByChildId($childId) {
        // return all records match the child id, or NULL if no match
	global $db;
        $child = DailyRecordsRepository::getChildById($childId);
        $signInRecords = array();
        $query = "SELECT * FROM daycaredb.signin_records WHERE child_id = $childId";
        $row_count = $db->exec($query);
        if ($row_count == 0) {
            return null;
        }
        $result = $db->query($query);
        foreach ($result as $row) {
             $signin_records = new SigninRecords($row['id'], $row['child_id'], $row['parent_signature'], 
                    $row['sign_in_timestamp'], $row['sign_out_timestamp']);
            $signin_records[] = $signin_records;
        }
        return $signin_records;
    }
    
    public static function getSignInRecordsByDate($initialDate, $finalDate = NULL) {
        // 1. return all records between a period of date, or NULL if no match
        // 2. if $finalDate === NULL, than return all records within the $initialDate, or NULL if no match
	global $db;
        $signin_records = array();
        if($finalDate == NULL){
            $query = "SELECT * FROM daycaredb.signin_records WHERE record_date = $initialDate";
        }else{
            $query = "SELECT * FROM daycaredb.signin_records WHERE record_date BETWEEN $initialDate AND $finalDate";
        }
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        foreach ($result as $row) {
            $signin_records = new SigninRecords($row['id'], $row['child_id'], $row['parent_signature'], 
                    $row['sign_in_timestamp'], $row['sign_out_timestamp']);
            $signin_records[] = $signin_records;
        }
        return $signin_records;
    }
    
    public static function deleteSignInRecordById($id) {
        // remove one record from DB, return 1 if record remove successed or 0 if failed
	global $db;
        $query = "DELETE FROM daycaredb.signin_records WHERE id = $id";
        $row_count = $db->exec($query);   
        return $row_count
    }
    
    public static function addSignInRecord($signInRecord) {
        // take a $signInRecord as parameter
        // insert into DB and return the "id" as integer which auto assign by the database
        // or return 0 if insert failed
	global $db;
        $child_id=$signInRecord->getChild_id();
	$parent_signature=$signInRecord->getParent_signature();
	$sign_in_timestamp=$signInRecord->getSign_in_timestamp();
	$sign_out_timestamp=$signInRecord->getSign_out_timestamp();
	$query=“INSERT INTO daycaredb.signin_records (child_id, parent_signature, sign_in_timestamp, sign_out_timestamp)
	VALUES ($child_id, $parent_signature, $sign_in_timestamp, $sign_out_timestamp)”;
	$signInRecordId = $db->exec($query);
	return $signInRecordId;
    }
}

