<?php

/*  
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: medical_history_records.php 
 * Date and Time: Nov 10, 2016 11:20:45 PM 
 * Project Name: CS556_Team_Project 
 */ 

class MedicalHistoryRecords {
    
    private $id, $height, $weight, $bronchiolitis, $pneumonia, $chicken_pox, $hepatitis, $scarlet_fever, $measles, 
            $german_measles, $mumps_, $pertussis, $other_illnesses, $medical_history, $chronic_illnesses, 
            $injuries_hospitalizations_history, $medication_allergy, $medication_reaction, $respiratory_allergy, 
            $respiratory_reaction, $food_allergy, $food_reaction, $other_allergy, $other_reaction;
    function __construct($id, $height, $weight, $bronchiolitis, $pneumonia, $chicken_pox, $hepatitis, $scarlet_fever, $measles, $german_measles, $mumps_, $pertussis, $other_illnesses, $medical_history, $chronic_illnesses, $injuries_hospitalizations_history, $medication_allergy, $medication_reaction, $respiratory_allergy, $respiratory_reaction, $food_allergy, $food_reaction, $other_allergy, $other_reaction) {
        $this->id = $id;
        $this->height = $height;
        $this->weight = $weight;
        $this->bronchiolitis = $bronchiolitis;
        $this->pneumonia = $pneumonia;
        $this->chicken_pox = $chicken_pox;
        $this->hepatitis = $hepatitis;
        $this->scarlet_fever = $scarlet_fever;
        $this->measles = $measles;
        $this->german_measles = $german_measles;
        $this->mumps_ = $mumps_;
        $this->pertussis = $pertussis;
        $this->other_illnesses = $other_illnesses;
        $this->medical_history = $medical_history;
        $this->chronic_illnesses = $chronic_illnesses;
        $this->injuries_hospitalizations_history = $injuries_hospitalizations_history;
        $this->medication_allergy = $medication_allergy;
        $this->medication_reaction = $medication_reaction;
        $this->respiratory_allergy = $respiratory_allergy;
        $this->respiratory_reaction = $respiratory_reaction;
        $this->food_allergy = $food_allergy;
        $this->food_reaction = $food_reaction;
        $this->other_allergy = $other_allergy;
        $this->other_reaction = $other_reaction;
    }
    function getId() {
        return $this->id;
    }

    function getHeight() {
        return $this->height;
    }

    function getWeight() {
        return $this->weight;
    }

    function getBronchiolitis() {
        return $this->bronchiolitis;
    }

    function getPneumonia() {
        return $this->pneumonia;
    }

    function getChicken_pox() {
        return $this->chicken_pox;
    }

    function getHepatitis() {
        return $this->hepatitis;
    }

    function getScarlet_fever() {
        return $this->scarlet_fever;
    }

    function getMeasles() {
        return $this->measles;
    }

    function getGerman_measles() {
        return $this->german_measles;
    }

    function getMumps_() {
        return $this->mumps_;
    }

    function getPertussis() {
        return $this->pertussis;
    }

    function getOther_illnesses() {
        return $this->other_illnesses;
    }

    function getMedical_history() {
        return $this->medical_history;
    }

    function getChronic_illnesses() {
        return $this->chronic_illnesses;
    }

    function getInjuries_hospitalizations_history() {
        return $this->injuries_hospitalizations_history;
    }

    function getMedication_allergy() {
        return $this->medication_allergy;
    }

    function getMedication_reaction() {
        return $this->medication_reaction;
    }

    function getRespiratory_allergy() {
        return $this->respiratory_allergy;
    }

    function getRespiratory_reaction() {
        return $this->respiratory_reaction;
    }

    function getFood_allergy() {
        return $this->food_allergy;
    }

    function getFood_reaction() {
        return $this->food_reaction;
    }

    function getOther_allergy() {
        return $this->other_allergy;
    }

    function getOther_reaction() {
        return $this->other_reaction;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHeight($height) {
        $this->height = $height;
    }

    function setWeight($weight) {
        $this->weight = $weight;
    }

    function setBronchiolitis($bronchiolitis) {
        $this->bronchiolitis = $bronchiolitis;
    }

    function setPneumonia($pneumonia) {
        $this->pneumonia = $pneumonia;
    }

    function setChicken_pox($chicken_pox) {
        $this->chicken_pox = $chicken_pox;
    }

    function setHepatitis($hepatitis) {
        $this->hepatitis = $hepatitis;
    }

    function setScarlet_fever($scarlet_fever) {
        $this->scarlet_fever = $scarlet_fever;
    }

    function setMeasles($measles) {
        $this->measles = $measles;
    }

    function setGerman_measles($german_measles) {
        $this->german_measles = $german_measles;
    }

    function setMumps_($mumps_) {
        $this->mumps_ = $mumps_;
    }

    function setPertussis($pertussis) {
        $this->pertussis = $pertussis;
    }

    function setOther_illnesses($other_illnesses) {
        $this->other_illnesses = $other_illnesses;
    }

    function setMedical_history($medical_history) {
        $this->medical_history = $medical_history;
    }

    function setChronic_illnesses($chronic_illnesses) {
        $this->chronic_illnesses = $chronic_illnesses;
    }

    function setInjuries_hospitalizations_history($injuries_hospitalizations_history) {
        $this->injuries_hospitalizations_history = $injuries_hospitalizations_history;
    }

    function setMedication_allergy($medication_allergy) {
        $this->medication_allergy = $medication_allergy;
    }

    function setMedication_reaction($medication_reaction) {
        $this->medication_reaction = $medication_reaction;
    }

    function setRespiratory_allergy($respiratory_allergy) {
        $this->respiratory_allergy = $respiratory_allergy;
    }

    function setRespiratory_reaction($respiratory_reaction) {
        $this->respiratory_reaction = $respiratory_reaction;
    }

    function setFood_allergy($food_allergy) {
        $this->food_allergy = $food_allergy;
    }

    function setFood_reaction($food_reaction) {
        $this->food_reaction = $food_reaction;
    }

    function setOther_allergy($other_allergy) {
        $this->other_allergy = $other_allergy;
    }

    function setOther_reaction($other_reaction) {
        $this->other_reaction = $other_reaction;
    }



}