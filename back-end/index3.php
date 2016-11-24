<?php

/*  
 * Student Info: Name=Wei Jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Wei Jin 
 * Filename: index3.php 
 * Date and Time: Nov 20, 2016 9:44:34 PM 
 * Project Name: CS556_Team_Project 
 */ 
include_once 'model/child_profiles_repository.php';
include_once 'model/child_profiles.php';
include_once 'model/daily_records_repository.php';
include_once 'model/daily_records.php';
include_once 'model/emergency_contact_profiles_repository.php';
include_once 'model/emergency_contact_profiles.php';
include_once 'db/dbcontext.php';
require 'db/db_connect.php';
$db = DBContext::getDB();

//$emergencyContactProfiles = EmergencyContactProfilesRepository::getEmergencyContactProfiles();
//$emergencyContactProfile = EmergencyContactProfilesRepository::getEmergencyContactProfileById(2);
//$emergencyContactProfiles = EmergencyContactProfilesRepository::getEmergencyContactProfilesByChildId(1);
//$emergencyContactProfile = new EmergencyContactProfiles('','father','t','qq','ww',5101111111,'sales','weekday',5108122231,4565232345,'aswr');
//$emergencyContactProfileid = EmergencyContactProfilesRepository::addEmergencyContactProfile($emergencyContactProfile);
//$rows = EmergencyContactProfilesRepository::deleteEmergencyContactProfileById(2); echo "$rows --------";
$emergencyContactProfiles = EmergencyContactProfilesRepository::getEmergencyContactProfiles();
$hasemergencyrecords = isset($emergencyContactProfiles); 
if ($hasemergencyrecords === false) {
    echo "<h1>needs $emergencyContactProfile</h1>";
    exit();
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>emergency contacts TEST</title>
    </head>
    <body>
        <h1>emergency contacts TEST</h1>
        <?php foreach ($emergencyContactProfiles as $emergencyContactProfile) : ?>
        <?php echo $emergencyContactProfile->getId() ?><br>
        <?php echo $emergencyContactProfile->getRelationship() ?><br>
        <?php echo $emergencyContactProfile->getFirst_name() ?><br>
        <?php echo $emergencyContactProfile->getLast_name() ?><br>
        <?php echo $emergencyContactProfile->getChinese_name() ?><br>
        <?php echo $emergencyContactProfile->getHome_phone_number() ?><br>
        <?php echo $emergencyContactProfile->getOccupation() ?><br>
        <?php echo $emergencyContactProfile->getWork_time() ?><br>
        <?php echo $emergencyContactProfile->getWork_phone_number() ?><br>
        <?php echo $emergencyContactProfile->getCell_phone_number() ?><br>
        <?php echo $emergencyContactProfile->getNote() ?><br><br>
        <?php endforeach; ?>
    </body>
</html>
