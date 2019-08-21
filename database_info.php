  <?php include 'header.php';?>

<table name ='userinfo ' class="schedule">
    <tr><th><u>User Schedules</u></th></tr>
    <tr>
        <th>User ID</th>
        <th>Activity ID</th>
        <th>Activity Name</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Date</th>
        <th>AM/PM</th>
        
    </tr>
    
         <!--<//?php include 'database.php';?> -->
         <?php
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        $resultsched = $mysqli -> query('select UserName,ActivityID, ActivityName, startTime, endTime, Date, AMPM from userSchedule');
      if ($resultsched -> num_rows >0){
        while ($row = mysqli_fetch_array($resultsched)) {//error original one was mysql_fetch_array($result). it was downgraded.
                       
            echo "<tr>";
            echo "<td>".$row["UserName"]."</td>";
            echo "<td>".$row["ActivityID"]."</td>";
            echo "<td>".$row["ActivityName"]."</td>";
            echo "<td>".$row["startTime"]."</td>";
            echo "<td>".$row["endTime"]."</td>";
            echo "<td>".$row["Date"]."</td>";
            echo "<td>".$row["AMPM"]."</td>"; 
            echo "</tr>" ; 
        }
    }
    else{
        echo "0 Results";
    }
    
    
    }
    ?>     
    
</table>
<table class ="users">
    <tr><th><u>User Info</u></th></tr>
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
                
    </tr>
    
    <?php
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
    $resultusers = $mysqli -> query('select UserID, userfname, userlname, useremail from userinfo');
    if ($resultusers -> num_rows >0){
        while ($row = mysqli_fetch_array($resultusers)) {//error original one was mysql_fetch_array($result). it was downgraded.
                       
            echo "<tr>";
            echo "<td>".$row["UserID"]."</td>";
            echo "<td>".$row["userfname"]."</td>";
            echo "<td>".$row["userlname"]."</td>";
            echo "<td>".$row["useremail"]."</td>"; 
            echo "</tr>" ; 
        }
    }
    else{
        echo "0 Results";
    }
    }
    
    ?>
    
</table>

<table class ="activitytype">
    <tr><th><u>Activity Info</u></th></tr>
    <tr>
        <th>Activity ID</th>
        <th>Description</th>
                        
    </tr>
    
    <?php
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
    $resultact = $mysqli -> query('select ActivityTypeID, Description from activitytype');
    if ($resultact -> num_rows >0){
        while ($row = mysqli_fetch_array($resultact)) {//error original one was mysql_fetch_array($result). it was downgraded.
                       
            echo "<tr>";
            echo "<td>".$row["ActivityTypeID"]."</td>";
            echo "<td>".$row["Description"]."</td>";
            echo "</tr>" ; 
        }
    }
    else{
        echo "0 Results";
    }
    }
    
    ?>
    
</table>

<table class ="ampm">
    <tr><th><u>AM/PM Info</u></th></tr>
    <tr>
        <th>ID</th>
        <th>Description</th>
                        
    </tr>
    
    <?php
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
    $resultact = $mysqli -> query('select ID, Description from ampm');
    if ($resultact -> num_rows >0){
        while ($row = mysqli_fetch_array($resultact)) {//error original one was mysql_fetch_array($result). it was downgraded.
                       
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["Description"]."</td>";
            echo "</tr>" ; 
        }
    }
    else{
        echo "0 Results";
    }
    }
    
    ?>
    
</table>

<?php include 'footer.php';?>