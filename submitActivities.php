<!--Submits the users activity into the database -->

<?php
session_start();
 $mysqli = new mysqli('127.0.0.1:3308', 'root', '','finalproject');
         if ($mysqli->connect_errno){
             echo "Server connection Error";
             exit;
         }

$activityName = $_POST['activity'];

$actvityDate = $_POST['date'];

$activityStartTime = $_POST['duration'];
$activityEndTime = $_POST['endduration'];
$am_pm = $_POST['ampm'];
$activityId = $_POST['activityType'];
$userName=$_SESSION['Name'];

$userId = $_SESSION['userid'];
//echo $userId;
/*
$result = $mysqli->query($userId);
if ($mysqli->query($userId) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $userId . "<br>" . $mysqli->error;
}
echo $userId;
 * 
 */
//echo $result;

$insertStatement = "insert into userschedule (userid, activityid, starttime, endtime, activityname, activitydate, ampm "
. "values( $userId, $activityId, '$activityStartTime', '$activityEndTime', '$activityName', '$actvityDate', '$am_pm')";

if ($mysqli->query($insertStatement) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertStatement . "<br>" . $mysqli->error;
}
?>
