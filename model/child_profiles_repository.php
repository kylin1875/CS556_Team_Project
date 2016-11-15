<?php

/*
 * Student Info: Name=Wei Jin, ID=9983
 * Subject: CS556_Team_Project_Fall_2016
 * Author: Wei Jin
 * Filename: child_profiles_repository.php
 * Date and Time: Nov 9, 2016 6:29:16 PM
 * Project Name: CS556_Team_Project
 */

class ChildProfilesRepository {
    // return all records as an array
    public static function getChilds() {
        global $db;
        $query = 'SELECT * FROM daycaredb.child_profiles ORDER BY id'; 
        $result = $db->query($query);
        $childs = array();
        foreach ($result as $row) {
            //impelement the child class
            $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                    , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                    , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                    , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                    , $row['phone'], $row['child_status']);
            $childs[] = $child;
        }
        return $childs;
    }
    // return one record by id, or NULL if no match 
    public static function getChildById($childId) {
        global $db;
        $query = "SELECT * FROM daycaredb.child_profiles WHERE id = $childId";
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        $row = $result->fetch();
        $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                , $row['phone'], $row['child_status']);
        return $child;
    }
     // return one record by first name and last name, or NULL if no match 
    public static function getChildsByName($fname,$lname) {
        global $db;
        $query = "SELECT * FROM daycaredb.child_profiles WHERE first_name = $fname AND last_name = $lname";
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        $childs = array();
        foreach ($result as $row) {
        $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                , $row['phone'], $row['child_status']);
                $childs[] = $child;
        }
        return $childs;
    }
    // return one record by chinese name, or NULL if no match 
    public static function getChildsByChineseName($name) {
        global $db;
        $query = "SELECT * FROM daycaredb.child_profiles WHERE chinese_name = $name";
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        $childs = array();
        foreach ($result as $row) {
        $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                , $row['phone'], $row['child_status']);
                $childs[] = $child;
        }
        return $childs;
    }
    // return one record by phone number, or NULL if no match 
    public static function getChildsByPhone($phone) {
        global $db;
        $query = "SELECT * FROM daycaredb.child_profiles WHERE phone = $phone";
        $row_count = $db->exec($query);
        if($row_count == 0){
            return null;
        }
        $result = $db->query($query);
        $childs = array();
        foreach ($result as $row) {
        $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                , $row['phone'], $row['child_status']);
                $childs[] = $child;
        }
        return $childs;
    }
    // remove one record from DB, return 1 if record remove successed or 0 if failed
    public static function deleteChild($childId) {
        global $db;
        //$child = getchild($childId);
        //$mum_id = $child->getMumID();
        //$dad_id = $child->getDadID();
        //$emre1id = $child->getEmer1ID();
        //$emer2id = $child->getEmer2ID();
        //$medicalhisid = $child->getMedicalHisID();
        //$medicalcareid = $child->getMedicalCareID();
        $query = "DELETE FROM daycaredb.child_profiles WHERE id = $childId";
        $row_count = $db->exec($query);   //after drop the child maybe need to delete related info table
        return $row_count;
    }
    // take a $child as parameter, insert into DB and return the "id" as integer which auto assign by the database, 0 if failed
    public static function addChild($child) {
        global $db;
        $mum_id = $child->getMumID();
        $dad_id = $child->getDadID();
        $emer1id = $child->getEmer1ID();
        $emer2id = $child->getEmer2ID();
        $medicalhisid = $child->getMedicalHisID();
        $medicalcareid = $child->getMedicalCareID();
        $enrollment_date = $child->getEnrollmentDate();
        $start_date = $child->getStartDate();
        $withdraw_date = $child->getWithdrawDate();
        $withdraw_reason = $child->getWithdrawReason();
        $first_name = $child->getFirstName();
        $last_name = $child->getLastName();
        $chinese_name = $child->getChineseName();
        $nick_name = $child->getNickName();
        $sex = $child->getSex();
        $age = $child->getAge();
        $birthday = $child->getBirthDate();
        $primary_language = $child->getPrimaryLan();
        $address = $child->getAddress();
        $phone = $child->getPhone();
        $child_status = $child->getChildStatus();
        $query = "INSERT INTO daycaredb.child_profiles (mum_id, dad_id, emer_1_id, emer_2_id,medical_history_id,
                  medical_care_id, enrollment_date, start_date, withdraw_date, withdraw_reason,
                  first_name, last_name, chinese_name, nick_name, sex, age, birthday, primary_language,
                  address, phone, child_status) VALUES ($mum_id, $dad_id, $emer1id, $emer2id,$medicalhisid,
                  $medicalcareid, $enrollment_date, $start_date, $withdraw_date, $withdraw_reason,
                  $first_name, $last_name, $chinese_name, $nick_name, $sex, $age, $birthday, $primary_language,
                  $address, $phone, $child_status)";
        $db->exec($query);
        $query = "SELECT last_insert_id();";
        $childId = $db->exec($query);
        return $childId;
    }

}
