<?php

/*
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: medical_care_profiles.php 
 * Date and Time: Nov 10, 2016 11:21:52 PM 
 * Project Name: CS556_Team_Project 
 */

class MedicalCareProfiles {

    private $id, $pcp_name, $clinic_name, $address, $phone_number, $primary_health_insurance_provider,
            $primary_health_insurance_number, $additional_health_insurance_provider, $additional__health_insurance_number;

    function __construct($id, $pcp_name, $clinic_name, $address, $phone_number, $primary_health_insurance_provider, $primary_health_insurance_number, $additional_health_insurance_provider, $additional_health_insurance_number) {
        $this->id = $id;
        $this->pcp_name = $pcp_name;
        $this->clinic_name = $clinic_name;
        $this->address = $address;
        $this->phone_number = $phone_number;
        $this->primary_health_insurance_provider = $primary_health_insurance_provider;
        $this->primary_health_insurance_number = $primary_health_insurance_number;
        $this->additional_health_insurance_provider = $additional_health_insurance_provider;
        $this->additional_health_insurance_number = $additional_health_insurance_number;
    }

    function getId() {
        return $this->id;
    }

    function getPcp_name() {
        return $this->pcp_name;
    }

    function getClinic_name() {
        return $this->clinic_name;
    }

    function getAddress() {
        return $this->address;
    }

    function getPhone_number() {
        return $this->phone_number;
    }

    function getPrimary_health_insurance_provider() {
        return $this->primary_health_insurance_provider;
    }

    function getPrimary_health_insurance_number() {
        return $this->primary_health_insurance_number;
    }

    function getAdditional_health_insurance_provider() {
        return $this->additional_health_insurance_provider;
    }

    function getAdditional_health_insurance_number() {
        return $this->additional__health_insurance_number;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPcp_name($pcp_name) {
        $this->pcp_name = $pcp_name;
    }

    function setClinic_name($clinic_name) {
        $this->clinic_name = $clinic_name;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPhone_number($phone_number) {
        $this->phone_number = $phone_number;
    }

    function setPrimary_health_insurance_provider($primary_health_insurance_provider) {
        $this->primary_health_insurance_provider = $primary_health_insurance_provider;
    }

    function setPrimary_health_insurance_number($primary_health_insurance_number) {
        $this->primary_health_insurance_number = $primary_health_insurance_number;
    }

    function setAdditional_health_insurance_provider($additional_health_insurance_provider) {
        $this->additional_health_insurance_provider = $additional_health_insurance_provider;
    }

    function setAdditional__health_insurance_number($additional__health_insurance_number) {
        $this->additional__health_insurance_number = $additional__health_insurance_number;
    }

    function convertAsArray() {
        $result = array();
        $result[] = $this->getId();
        $result[] = $this->getPcp_name();
        $result[] = $this->getClinic_name();
        $result[] = $this->getAddress();
        $result[] = $this->getPhone_number();
        $result[] = $this->getPrimary_health_insurance_provider();
        $result[] = $this->getPrimary_health_insurance_number();
        $result[] = $this->getAdditional_health_insurance_provider();
        $result[] = $this->getAdditional_health_insurance_number();
        return $result;
    }

}
