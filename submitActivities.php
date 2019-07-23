<!--Submits the users activity into the database -->

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
$am_pm = $_POST['ampm'];
$activityId = "select activityTypeid from activitytype where description like $activityType";
$userId=$_GET['email'];
$maxID = "select max(userscheduleid) from userschedule";
$maxID +=1;

$insertStatement = "insert into userschedule (userscheduleid,userid, activityid, starttime, endtime, activityname, activitydate, ampm "
. "values($maxid, $userId, $activityId, '$activityStartTime', '$activityEndTime', '$activityName', '$activityDate', '$am_pm')";

if ($mysqli->query($insertStatement) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertStatement . "<br>" . $mysqli->error;
}
?>
