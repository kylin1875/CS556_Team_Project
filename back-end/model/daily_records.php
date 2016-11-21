<?php

/*
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: daily_records.php 
 * Date and Time: Nov 10, 2016 11:26:54 PM 
 * Project Name: CS556_Team_Project 
 */

class DailyRecords {

    private $id, $child_id, $record_date, $emotion, $sleep_duration, $body_temperature, 
            $defecation, $meal, $activity, $defecation_at_home, $sleep_status;

    function __construct($id, $child_id, $record_date, $emotion, $sleep_duration, $body_temperature, $defecation, $meal, $activity, $defecation_at_home, $sleep_status) {
        $this->id = $id;
        $this->child_id = $child_id;
        $this->record_date = $record_date;
        $this->emotion = $emotion;
        $this->sleep_duration = $sleep_duration;
        $this->body_temperature = $body_temperature;
        $this->defecation = $defecation;
        $this->meal = $meal;
        $this->activity = $activity;
        $this->defecation_at_home = $defecation_at_home;
        $this->sleep_status = $sleep_status;
    }

    function getId() {
        return $this->id;
    }

    function getChild_id() {
        return $this->child_id;
    }

    function getRecord_date() {
        return $this->record_date;
    }

    function getEmotion() {
        return $this->emotion;
    }

    function getSleep_duration() {
        return $this->sleep_duration;
    }

    function getBody_temperature() {
        return $this->body_temperature;
    }

    function getDefecation() {
        return $this->defecation;
    }

    function getMeal() {
        return $this->meal;
    }

    function getActivity() {
        return $this->activity;
    }

    function getDefecation_at_home() {
        return $this->defecation_at_home;
    }

    function getSleep_status() {
        return $this->sleep_status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setChild_id($child_id) {
        $this->child_id = $child_id;
    }

    function setRecord_date($record_date) {
        $this->record_date = $record_date;
    }

    function setEmotion($emotion) {
        $this->emotion = $emotion;
    }

    function setSleep_duration($sleep_duration) {
        $this->sleep_duration = $sleep_duration;
    }

    function setBody_temperature($body_temperature) {
        $this->body_temperature = $body_temperature;
    }

    function setDefecation($defecation) {
        $this->defecation = $defecation;
    }

    function setMeal($meal) {
        $this->meal = $meal;
    }

    function setActivity($activity) {
        $this->activity = $activity;
    }

    function setDefecation_at_home($defecation_at_home) {
        $this->defecation_at_home = $defecation_at_home;
    }

    function setSleep_status($sleep_status) {
        $this->sleep_status = $sleep_status;
    }

}
