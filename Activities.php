<!--the activity form for user to add an activity to the database/schedule -->
        <?php include 'header.php';?>

<form name="activities" method="post" action="submitActivities.php">
    Type of Activity: <?php include 'actions.php';?><br>
    Activity Name: <input type="text" name="activity" value=""><br>
    Activity Date: <input type="date" name="date" value=""><br>
    Start Time of Activity: <input type="time" name="duration" value="01:00:00"><br>
    End Time of Activity: <input type="time" name="endduration" value="02:00:00"><br>
    AM/PM <?php include 'time.php';?>
                
    <input type="checkbox" name="reminder" > Set Reminder?<br>
      
    <input type="submit" name="submit">
    
</form>
<?php include 'footer.php';?>

 
