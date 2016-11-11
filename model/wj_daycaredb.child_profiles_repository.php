<?php

/* 
 * Student Info: Name=wei jin, ID=9983
 * Subject: Course526_HWN1_fall_2016
 * Author: yewuy
 * Filename: child_profile_repository.php
 * Date and Time: Nov 9, 2016 6:29:16 PM
 * Project Name: iphoneproject
 */
class ChildProfileRepository {

    public static function getChilds() {
        global $db;
        $query = 'SELECT * FROM daycaredb.child_profiles'
                . 'ORDER BY id'; //'OREDER
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
    public static function getchild($child_id) {
        global $db;
        $query = "SELECT * FROM daycaredb.child_profiles WHERE id = $child_id";
        $result = $db->query($query);
        $row = $result->fetch();
        $child = new ChildProfile($row['id'], $row['mum_id'], $row['dad_id'], $row['emer_1_id'], $row['emer_2_id']
                    , $row['medical_history_id'], $row['medical_care_id'], $row['enrollment_date'], $row['start_date']
                    , $row['withdraw_date'], $row['withdraw_reason'], $row['first_name'], $row['last_name']
                    , $row['chinese_name'], $row['nick_name'], $row['sex'], $row['age'], $row['birthday'], $row['primary_language'], $row['address']
                    , $row['phone'], $row['child_status']);
        return $child;
    }
    
    public static function deleteChild($child_id) {
        global $db;      
        $child = getchild($child_id);
        $mum_id = $child->getMumID();
        $dad_id = $child->getDadID();
        $emre1id = $child->getEmer1ID();
        $emer2id = $child->getEmer2ID();
        $medicalhisid = $child->getMedicalHisID();
        $medicalcareid = $child->getMedicalCareID();
        $query = "DELETE FROM daycaredb.child_profiles WHERE id = $child_id";
        $row_count = $db->exec($query);   //after drop the child need to delete related info table **************************
        return $row_count;
    }

    public static function addChild($child) {
        global $db;
        $child_id = $child->getID();
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
        $query = "INSERT INTO daycaredb.child_profiles (id, mum_id, dad_id, emer_1_id, emer_2_id,medical_history_id,
                  medical_care_id, enrollment_date, start_date, withdraw_date, withdraw_reason,
                  first_name, last_name, chinese_name, nick_name, sex, age, birthday, primary_language,
                  address, phone, child_status) VALUES ($child_id, $mum_id, $dad_id, $emer1id, $emer2id,$medicalhisid,
                  $medicalcareid, $enrollment_date, $start_date, $withdraw_date, $withdraw_reason,
                  $first_name, $last_name, $chinese_name, $nick_name, $sex, $age, $birthday, $primary_language,
                  $address, $phone, $child_status)";
        $row_count = $db->exec($query);
        return $row_count;
    }
    
}

