<?php

/*  
 * Student Info: Name=Wei Jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Wei Jin 
 * Filename: primary_contact_profiles.php 
 * Date and Time: Nov 12, 2016 11:46:08 PM 
 * Project Name: CS556_Team_Project 
 */ 

class PrimaryContactProfiles {
    private $id, $relationship,$first_name, $last_name, $chinese_name, $age, $language_spoken, $occupation,
            $employer, $primary_email, $additional_email ,$cell_phone_number,$work_phone_number, $note;
    function __construct($id, $relationship, $first_name, $last_name, $chinese_name, $age, $language_spoken, $occupation, $employer, $primary_email, $additional_email, $cell_phone_number, $work_phone_number, $note) {
        $this->id = $id;
        $this->relationship = $relationship;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->chinese_name = $chinese_name;
        $this->age = $age;
        $this->language_spoken = $language_spoken;
        $this->occupation = $occupation;
        $this->employer = $employer;
        $this->primary_email = $primary_email;
        $this->additional_email = $additional_email;
        $this->cell_phone_number = $cell_phone_number;
        $this->work_phone_number = $work_phone_number;
        $this->note = $note;
    }
    function getId() {
        return $this->id;
    }

    function getRelationship() {
        return $this->relationship;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getChinese_name() {
        return $this->chinese_name;
    }

    function getAge() {
        return $this->age;
    }

    function getLanguage_spoken() {
        return $this->language_spoken;
    }

    function getOccupation() {
        return $this->occupation;
    }

    function getEmployer() {
        return $this->employer;
    }

    function getPrimary_email() {
        return $this->primary_email;
    }

    function getAdditional_email() {
        return $this->additional_email;
    }

    function getCell_phone_number() {
        return $this->cell_phone_number;
    }

    function getWork_phone_number() {
        return $this->work_phone_number;
    }

    function getNote() {
        return $this->note;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setRelationship($relationship) {
        $this->relationship = $relationship;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setChinese_name($chinese_name) {
        $this->chinese_name = $chinese_name;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setLanguage_spoken($language_spoken) {
        $this->language_spoken = $language_spoken;
    }

    function setOccupation($occupation) {
        $this->occupation = $occupation;
    }

    function setEmployer($employer) {
        $this->employer = $employer;
    }

    function setPrimary_email($primary_email) {
        $this->primary_email = $primary_email;
    }

    function setAdditional_email($additional_email) {
        $this->additional_email = $additional_email;
    }

    function setCell_phone_number($cell_phone_number) {
        $this->cell_phone_number = $cell_phone_number;
    }

    function setWork_phone_number($work_phone_number) {
        $this->work_phone_number = $work_phone_number;
    }

    function setNote($note) {
        $this->note = $note;
    }



}