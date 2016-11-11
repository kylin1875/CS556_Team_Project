<?php

/*
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: emergency_contact_profiles.php 
 * Date and Time: Nov 10, 2016 11:18:56 PM 
 * Project Name: CS556_Team_Project 
 */

class EmergencyContactProfiles {

    private $id, $relationship, $first_name, $last_name, $chinese_name, $home_phone_number, $occupation, $work_time
            , $work_phone_number, $cell_phone_number, $note;

    function __construct($id, $relationship, $first_name, $last_name, $chinese_name, $home_phone_number, $occupation, $work_time, $work_phone_number, $cell_phone_number, $note) {
        $this->id = $id;
        $this->relationship = $relationship;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->chinese_name = $chinese_name;
        $this->home_phone_number = $home_phone_number;
        $this->occupation = $occupation;
        $this->work_time = $work_time;
        $this->work_phone_number = $work_phone_number;
        $this->cell_phone_number = $cell_phone_number;
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

    function getHome_phone_number() {
        return $this->home_phone_number;
    }

    function getOccupation() {
        return $this->occupation;
    }

    function getWork_time() {
        return $this->work_time;
    }

    function getWork_phone_number() {
        return $this->work_phone_number;
    }

    function getCell_phone_number() {
        return $this->cell_phone_number;
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

    function setHome_phone_number($home_phone_number) {
        $this->home_phone_number = $home_phone_number;
    }

    function setOccupation($occupation) {
        $this->occupation = $occupation;
    }

    function setWork_time($work_time) {
        $this->work_time = $work_time;
    }

    function setWork_phone_number($work_phone_number) {
        $this->work_phone_number = $work_phone_number;
    }

    function setCell_phone_number($cell_phone_number) {
        $this->cell_phone_number = $cell_phone_number;
    }

    function setNote($note) {
        $this->note = $note;
    }

}
