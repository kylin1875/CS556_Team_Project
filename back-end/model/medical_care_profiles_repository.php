<?php

/*
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: medical_care_profiles_repository.php 
 * Date and Time: Nov 10, 2016 11:22:21 PM 
 * Project Name: CS556_Team_Project 
 */

class MedicalCareProfilesRepository {

    // return all profiles as an array
    public static function getAllMedicalCareProfiles() {
        global $db;
        $query = "SELECT * FROM daycaredb.medical_care_profiles ORDER BY id";
        $result = $db->query($query);
        $medicalCareProfiles = array();
        foreach ($result as $row) {
            // fetch db data to profile variable
            $medicalCareProfile = new MedicalCareProfiles($row['id'], $row['pcp_name'], $row['clinic_name'], $row['address']
                    , $row['phone_number'], $row['primary_health_insurance_provider'], $row['primary_health_insurance_number']
                    , $row['additinal_health_insurance_provider'], $row['additional_health_insurance_number']);
            // add new profile to array
            $medicalCareProfiles[] = $medicalCareProfile;
        }
        return $medicalCareProfile;
    }

    // return one profile search by id, or NULL if no match
    public static function getMedicalCareProfileById($id) {
        global $db;
        $query = "SELECT * FROM daycaredb.medical_care_profiles WHERE id = $id";
        $result = $db->query($query);
        if ($result !== NULL) {
            $row = $result->fetch();
            $medicalCareProfile = new MedicalCareProfiles($row['id'], $row['pcp_name'], $row['clinic_name'], $row['address']
                    , $row['phone_number'], $row['primary_health_insurance_provider'], $row['primary_health_insurance_number']
                    , $row['additinal_health_insurance_provider'], $row['additional_health_insurance_number']);
            return $medicalCareProfile;
        } else {
            return NULL;
        }
    }

    // return profile match the child id, or NULL if no match
    public static function getMedicalCareProfileByChildId($childId) {
        global $db;
        $query = "SELECT * FROM daycaredb.medical_care_profiles WHERE child_id = $childId";
        $result = $db->query($query);
        if ($result !== NULL) {
            $row = $result->fetch();
            $medicalCareProfile = new MedicalCareProfiles($row['id'], $row['pcp_name'], $row['clinic_name'], $row['address']
                    , $row['phone_number'], $row['primary_health_insurance_provider'], $row['primary_health_insurance_number']
                    , $row['additinal_health_insurance_provider'], $row['additional_health_insurance_number']);
            return $medicalCareProfile;
        } else {
            return NULL;
        }
    }

    // remove one profile from DB, return 1 if profile remove successed or 0 if failed
    public static function deleteMedicalCareProfileById($id) {
        global $db;
        $query = "DELETE FROM daycaredb.medical_care_profiles WHERE id = $id";
        $row_count = $db->exec($query);
        return $row_count;
    }

    // take a $medicalCareProfile as parameter
    // insert into DB and return the "id" as integer which auto assign by the database
    // or return 0 if insert failed
    public static function addMedicalCareProfile($medicalCareProfile) {
        global $db;
        $query = "INSERT INTO daycaredb.medical_care_profiles (pcp_name, clinic_name, address, phone_number
                , primary_health_insurance_provider, primary_health_insurance_number, additional_health_insurance_provider
                , additional_health_insurance_number) VALUES($medicalCareProfile->getPcp_name(), $medicalCareProfile->getClinic_name()
                , $medicalCareProfile->getAddress(), $medicalCareProfile->getPhone_number(), $medicalCareProfile->getPrimary_health_insurance_provider()
                , $medicalCareProfile->getPrimary_health_insurance_number(), $medicalCareProfile->getAdditional_health_insurance_provider()
                , $medicalCareProfile->getAdditional_health_insurance_number())";
        $db->query($query);
        return $db->lastInsertId();
    }

}
