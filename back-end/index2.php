<!DOCTYPE html>
<?php
/*  
 * Student Info: Name=Wei jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Wei Jin
 * Filename: index2.php 
 * Date and Time: Nov 20, 2016 8:37:49 PM 
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

//$dailyrecords = DailyRecordsRepository::getDailyRecords();
//$dailyrecord = DailyRecordsRepository::getDailyRecordById(1);
//$dailyrecords = DailyRecordsRepository::getDailyRecordsByChildId(1);
//$dailyrecords = DailyRecordsRepository::getDailyRecordsByDate('2016-01-01','2016-01-02');
//$dailyRecord = new DailyRecords('',1,'2016-01-02','happy','12:02:28',37,2,'pork','reading',1,'ok');
//$dailyrecordsid = DailyRecordsRepository::addDailyRecord($dailyRecord);
$rows = DailyRecordsRepository::deleteDailyRecordById(1);
$dailyrecords = DailyRecordsRepository::getDailyRecords();
$hasDailyrecords = isset($dailyrecords); 
if ($hasDailyrecords === false) {
    echo "<h1>needs $dailyrecords</h1>";
    exit();
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Daily record TEST</title>
    </head>
    <body>
        <h1>Daily record TEST</h1>
        <?php foreach ($dailyrecords as $dailyrecord) : ?>
        <?php echo $dailyrecord->getId() ?><br>
        <?php echo $dailyrecord->getChild_id() ?><br>
        <?php echo $dailyrecord->getRecord_date() ?><br>
        <?php echo $dailyrecord->getEmotion() ?><br>
        <?php echo $dailyrecord->getSleep_duration() ?><br>
        <?php echo $dailyrecord->getBody_temperature() ?><br>
        <?php echo $dailyrecord->getDefecation() ?><br>
        <?php echo $dailyrecord->getMeal() ?><br>
        <?php echo $dailyrecord->getActivity() ?><br>
        <?php echo $dailyrecord->getDefecation_at_home() ?><br>
        <?php echo $dailyrecord->getSleep_status() ?><br><br>
        <?php endforeach; ?>
    </body>
</html>


