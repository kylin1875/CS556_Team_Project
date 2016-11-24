<!DOCTYPE html>
<?php
/*
 * Student Info ?><br> Name=Wei Jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Wei Jin
 * Filename: index.php 
 * Date and Time: Nov 20, 2016 5:08:57 PM 
 * Project Name: CS556_Team_Project 
 */
include_once '../model/child_profiles_repository.php';
include_once '../model/child_profiles.php';
include_once '../model/daily_records_repository.php';
include_once '../model/daily_records.php';
include_once '../model/emergency_contact_profiles_repository.php';
include_once '../model/emergency_contact_profiles.php';
include_once '../db/db_context.php';
require '../db/db_connect.php';
$db = DBContext::getDB();

//$child = ChildProfilesRepository::getChildById(1);
//$childs = ChildProfilesRepository::getChilds();
//$childs = ChildProfilesRepository::getChildsByName('yue','yang');
//$childs = ChildProfilesRepository::getChildsByChineseName('yue yang');  
//$childs = ChildProfilesRepository::getChildsByPhone(5103121234); 
//$rows = ChildProfilesRepository::deleteChild(1); echo "$rows --------";
//$child = new ChildProfiles('',2,2,2,2,1,1,'2016-01-01','2016-07-12','','','we', 'hua','yue yang', 'bb','m','1-1-1','2015-09-15','english','123 ss', 5103122334,'studing');
//$childid = ChildProfilesRepository::addChild($child);
$childs = ChildProfilesRepository::getChilds();
$hasChild = isset($childs);
if ($hasChild === false) {
    echo "<h1>needs $child</h1>";
    exit();
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>DAYCAREDB TEST</title>
    </head>
    <body>
        <h1>DAYCAREDB TEST</h1>
        <h1>get child profile while child id equal to 1</h1>
        <?php foreach ($childs as $child) : ?>
        <?php echo $child->getId() ?><br>
        <?php echo $child->getMom_id() ?><br>
        <?php echo $child->getDad_id() ?><br>
        <?php echo $child->getEmer_1_id() ?><br>
        <?php echo $child->getEmer_2_id() ?><br>
        <?php echo $child->getMedical_history_id() ?><br>
        <?php echo $child->getMedical_care_id() ?><br>
        <?php echo $child->getEnrollment_date() ?><br>
        <?php echo $child->getStart_date() ?><br>
        <?php echo $child->getWithdraw_date() ?><br>
        <?php echo $child->getWithdraw_reason() ?><br>
        <?php echo $child->getFirst_name() ?><br>
        <?php echo $child->getLast_name() ?><br>
        <?php echo $child->getChinese_name() ?><br>
        <?php echo $child->getNick_name() ?><br>
        <?php echo $child->getSex() ?><br>
        <?php echo $child->getAge() ?><br>
        <?php echo $child->getBirthday() ?><br>
        <?php echo $child->getPrimary_language() ?><br>
        <?php echo $child->getAddress() ?><br>
        <?php echo $child->getPhone() ?><br>
        <?php echo $child->getChild_status() ?><br>
        <?php endforeach; ?>
    </body>
</html>


