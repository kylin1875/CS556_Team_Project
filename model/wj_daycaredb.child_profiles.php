<?php

/* 
 * Student Info: Name=wei jin, ID=9983
 * Subject: Course526_HWN1_fall_2016
 * Author: yewuy
 * Filename: child_profile.php
 * Date and Time: Nov 9, 2016 6:01:40 PM
 * Project Name: iphoneproject
 */

class ChildProfile {

    private $id, $mum_id, $dad_id, $emer_1_id, $emer_2_id,$medical_history_id,
    $medical_care_id, $enrollment_date, $start_date, $withdraw_date, $withdraw_reason,
    $first_name, $last_name, $chinese_name, $nick_name, $sex, $age, $birthday, $primary_language,
    $address, $phone, $child_status;
    
    public function __construct($id, $mum_id, $dad_id, $emer_1_id, $emer_2_id,$medical_history_id,
    $medical_care_id, $enrollment_date, $start_date, $withdraw_date, $withdraw_reason,
    $first_name, $last_name, $chinese_name, $nick_name, $sex, $age, $birthday, $primary_language,
    $address, $phone, $child_status) {
        $this->id = $id;
        $this->mum_id = $mum_id;
        $this->dad_id = $dad_id;
        $this->emer_1_id = $emer_1_id;
        $this->emer_2_id = $emer_2_id;
        $this->medical_history_id = $medical_history_id;
        $this->medical_care_id = $medical_care_id;
        $this->enrollment_date = $enrollment_date;
        $this->start_date = $start_date;
        $this->withdraw_date = $withdraw_date;
        $this->withdraw_reason = $withdraw_reason;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->chinese_name = $chinese_name;
        $this->nick_name = $nick_name;
        $this->sex = $sex;
        $this->age = $age;
        $this->birthday = $birthday;
        $this->primary_language = $primary_language;
        $this->address = $address;
        $this->phone = $phone;
        $this->child_status = $child_status;   
    }

    // getters
    public function getID() {
        return $this->id;
    }
    public function getMumID() {
        return $this->mum_id;
    }
    public function getDadID() {
        return $this->dad_id;
    }  
    public function getEmer1ID() {
        return $this->emer_1_id;
    } 
    public function getEmer2ID() {
        return $this->emer_2_id;
    }
    public function getMedicalHisID() {
        return $this->medical_history_id;
    }
    public function getMedicalCareID() {
        return $this->medical_care_id;
    }
    public function getEnrollmentDate() {
        return $this->enrollment_date;
    }
    public function getStartDate() {
        return $this->start_date;
    }
    public function getWithdrawDate() {
        return $this->withdraw_date;
    }
    public function getWithdrawReason() {
        return $this->withdraw_reason;
    }
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    public function getChineseName() {
        return $this->chinese_name;
    }
    public function getNickName() {
        return $this->nick_name;
    }
    public function getSex() {
        return $this->sex;
    }
    public function getAge() {
        return $this->age;
    }
    public function getBirthDate() {
        return $this->birthday;
    }
    public function getPrimaryLan() {
        return $this->primary_language;
    }
    public function getAddress() {
        return $this->address;
    }public function getPhone() {
        return $this->phone;
    }
    public function getChildStatus() {
        return $this->child_status;
    }
    
    // setters
    public function setID($id) {
        $this->id = $id;
    }
    public function setMumID($mum_id) {
        $this->mum_id = $mum_id;
    }
    public function setDadID($dad_id) {
        $this->dad_id = $dad_id;
    }  
    public function setEmer1ID($emer_1_id) {
        $this->emer_1_id = $emer_1_id;
    } 
    public function setEmer2ID($emer_2_id) {
        $this->emer_2_id = $emer_2_id;
    }
    public function setMedicalHisID($medical_history_id) {
        $this->medical_history_id = $medical_history_id;
    }
    public function setMedicalCareID($medical_care_id) {
        $this->medical_care_id = $medical_care_id;
    }
    public function setEnrollmentDate($enrollment_date) {
        $this->enrollment_date = $enrollment_date;
    }
    public function setStartDate($start_date) {
        $this->start_date = $start_date;
    }
    public function setWithdrawDate($withdraw_date) {
        $this->withdraw_date = $withdraw_date;
    }
    public function setWithdrawReason($withdraw_reason) {
        $this->withdraw_reason = $withdraw_reason;
    }
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
    public function setChineseName($chinese_name) {
        $this->chinese_name = $chinese_name;
    }
    public function setNickName($nick_name) {
        $this->nick_name = $nick_name;
    }
    public function setSex($sex) {
        $this->sex = $sex;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setBirthdate($birthday) {
        $this->birthday = $birthday;
    }
    public function setPrimaryLan($primary_language) {
        $this->primary_language = $primary_language;
    }
    public function setAddress($address) {
        $this->address = $address;
    }public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function setChildStatus($child_status) {
        $this->child_status = $child_status;
    }

}
