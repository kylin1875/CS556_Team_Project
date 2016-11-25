<?php

/*
 * Student Info: Name=Arvin Mai, ID=10010
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: medical_care_profiles_repository_test.php 
 * Date and Time: Nov 24, 2016 3:25:52 PM 
 * Project Name: CS556_Team_Project 
 */

include_once '../model/medical_care_profiles.php';
include_once '../model/medical_care_profiles_repository.php';
include_once '../db/db_context.php';
require '../db/db_connect.php';
$db = DBContext::getDB();

$query = "SHOW columns FROM daycaredb.medical_care_profiles;";
$serverName = 'localhost';
$username = 'root';
$passwd = 'johnson5414';
$dbName = 'daycaredb';
$field = 'Field';
$columnIndex = array();
$conn = new mysqli($serverName, $username, $passwd, $dbName);
$result = mysqli_query($conn, $query);
mysqli_close($conn);
echo "-------------------------------------------<br>";
echo "Print all column name:<br><br>";
while ($row = mysqli_fetch_array($result)) {
    $columnIndex[] = $row['Field'];
    echo "$row[$field]<br>";
}
echo "-------------------------------------------<br>";
//print_r($columnIndex);
echo "Test for getAllMedicalCareProfiles():<br><br>";
$profiles = MedicalCareProfilesRepository::getAllMedicalCareProfiles();
if ($profiles === NULL) {
    echo "No data<br>";
}
foreach ($profiles as $profile) {
    $profileArray = $profile->convertAsArray();
    foreach ($profileArray as $index => $value) {
        echo $columnIndex[$index] . ":" . $value, "<br>";
    }
    echo "------------------<br>";
}
echo "-------------------------------------------<br>";
echo "-------------------------------------------<br>";
echo 'Test for getMedicalCareProfileById($id):<br><br>';
$testId = 1;
$testIdError = 5;
$result = MedicalCareProfilesRepository::getMedicalCareProfileById($testId);
$resultError = MedicalCareProfilesRepository::getMedicalCareProfileById($testIdError);
$profileArray = $result->convertAsArray();
foreach ($profileArray as $index => $value) {
    echo $columnIndex[$index] . ":" . $value, "<br>";
}
echo "------------------<br>";
print_r($resultError);
if ($resultError === NULL) {
    echo "good, nothing shows up!<br>";
}
echo "-------------------------------------------<br>";
echo "-------------------------------------------<br>";
echo 'Test for getMedicalCareProfileByChildId($id):<br><br>';
$testId = 1;
$testIdError = 5;
$result = MedicalCareProfilesRepository::getMedicalCareProfileByChildId($testId);
$resultError = MedicalCareProfilesRepository::getMedicalCareProfileByChildId($testIdError);
$profileArray = $result->convertAsArray();
foreach ($profileArray as $index => $value) {
    echo $columnIndex[$index] . ":" . $value, "<br>";
}
echo "------------------<br>";
print_r($resultError);
if ($resultError === NULL) {
    echo "good, nothing shows up!<br>";
}
echo "-------------------------------------------<br>";