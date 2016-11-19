<?php

/*
 * Student Info: Name=Han Wu, ID=16327
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Han 
 * Filename: primary_contact_profiles_repository.php 
 * Date and Time: Nov 10, 2016 11:18:38 PM 
 * Project Name: CS556_Team_Project 
 */

class PrimaryContactProfilesRepository {

    // return all records as an array
    public static function getPrimaryContactProfiles() {
        global $db;
        $query = "SELECT * FROM daycaredb.primary_contact_profiles ORDER BY id";
        $result = $db->query($query);
        $primaryContactProfiles = array();
        foreach ($result as $row) {
            $primaryContactProfile = new PrimaryContactProfiles($row['id'], $row['relationship'], $row['first_name'], $row['last_name'], $row['chinese_name'], $row['age'], $row['language_spoken'], $row['occupation'], $row['employer'], $row['primary_email'], $row['additional_email'], $row['cell_phone_number'], $row['work_phone_number'], $row['note']);
            $primaryContactProfiles[] = $primaryContactProfile;
        }
        return $primaryContactProfiles;
    }

    // return one record by id, or NULL if no match
    public static function getPrimaryContactProfileById($id) {
        global $db;
        $query = "SELECT * FROM daycaredb.primary_contact_profiles WHERE id = $id";
        $row_count = $db->exec($query);
        if ($row_count == 0) {
            return null;
        }
        $result = $db->query($query);
        $row = $result->fetch();
        $primaryContactProfile = new PrimaryContactProfiles($row['id'], $row['relationship'], $row['first_name'], $row['last_name'], $row['chinese_name'], $row['age'], $row['language_spoken'], $row['occupation'], $row['employer'], $row['primary_email'], $row['additional_email'], $row['cell_phone_number'], $row['work_phone_number'], $row['note']);
        return $primaryContactProfile;
    }

    // return all records match the child id, or NULL if no match
    public static function getPrimaryContactProfilesByChildId($childId) {
        global $db;
        $primaryContactProfiles = array();
        $primaryContactProfileid = array();
        $primaryContactProfileid[0] = $childId->getMum_id();
        $primaryContactProfileid[1] = $childId->getDad_id();
        $query = "SELECT * FROM daycaredb.primary_contact_profiles WHERE id = $primaryContactProfileid[0] OR 
            id = $primaryContactProfileid[1]";
        foreach ($result as $row) {
            $primaryContactProfile = new PrimaryContactProfiles($row['id'], $row['relationship'], $row['first_name'], $row['last_name'], $row['chinese_name'], $row['age'], $row['language_spoken'], $row['occupation'], $row['employer'], $row['primary_email'], $row['additional_email'], $row['cell_phone_number'], $row['work_phone_number'], $row['note']);
            $emergencyContactProfiles[] = $emergencyContactProfile;
            }
          return $primaryContactProfiles;
    }
    // remove one record from DB, return 1 if record remove successed or 0 if failed
    public static function deletePrimaryContactProfileById($id) {
        global $db;
        $query = "DELETE FROM daycaredb.primary_contact_profiles WHERE id = $id";
        $row_count = $db->exec($query);
        return $row_count;
    }

    // take a $signInRecord as parameter
    // insert into DB and return the "id" as integer which auto assign by the database
    // or return 0 if insert failed
    public static function addPrimaryContactProfile($primaryContactProfile) {
        global $db;
        $relationship = $primaryContactProfile->getRelationship();
        $first_name = $primaryContactProfile->getFirst_name();
        $last_name = $primaryContactProfile->getlast_name();
        $chinese_name = $primaryContactProfile->getChinese_name();
        $age = $primaryContactProfile->getAge();
        $language_spoken = $primaryContactProfile->getLanguage_spoken();
        $occupation = $primaryContactProfile->getOccupation();
        $employer = $primaryContactProfile->getEmployer();
        $primary_email = $primaryContactProfile->getPrimary_email();
        $additional_email = $primaryContactProfile->getAdditional_email();
        $cell_phone_number = $primaryContactProfile->getCell_phone_number();
        $work_phone_number = $primaryContactProfile->getWork_phone_number();
        $note = $primaryContactProfile->getNote();
        $query = "INSERT INTO daycaredb.primary_contact_profiles (relationship, first_name, last_name, 
                chinese_name, age, language_spoken, occupation, employer, primary_email, additional_email, cell_phone_number,
                work_phone_number, note) 
                VALUES ($relationship, $first_name, $last_name, 
                $chinese_name, $age, $language_spoken, $occupation, $employer, $primary_email, $additional_email, $cell_phone_number,
                $work_phone_number, $note)";
        $db->exec($query);
        $query = "SELECT last_insert_id();";
        $primaryContactProfileId = $db->exec($query);
        return $primaryContactProfileId;
    }

}
