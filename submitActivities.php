<?php

 $mysqli = new mysqli('127.0.0.1:3308', 'root', '','finalproject');
         if ($mysqli->connect_errno){
             echo "Server connection Error";
             exit;
         }

$activityName = $_POST['activity'];
$activityType = $_POST['activityType'];
$actvityDate = $_POST['date'];
$activityStartTime = $_POST['duration'];
$activityEndTime = $_POST['endduration'];
$activityId = "select activityTypeid from activitytype where description like $activityType";
$userId=$_GET['email'];
$maxID = "select max(userscheduleid) from userschedule";

$insertStatement = "insert into userschedule (userscheduleid,userid, activityid, starttime, endtime, activityname, activitydate "
. "values($maxid+1, $userId, $activityId, $activityStartTime, $activityEndTime, $activityName, $activityDate)";

if ($mysqli->query($insertStatement) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertStatement . "<br>" . $mysqli->error;
}
?>
