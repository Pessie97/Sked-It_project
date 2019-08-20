  <?php include 'header.php';?>

<table name ='userinfo ' class="schedule">
    <tr>
        <th>User ID</th>
        <th>Schedule ID</th>
        <th>Activity ID</th>
        <th>Activity Name</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Date</th>
        <th>AM/PM</th>
        
    </tr>
    <tr>
         <!--<//?php include 'database.php';?> -->
         <?php
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        $result = $mysqli -> query('select * from userSchedule');
      
        while ($row = mysql_fetch_array($result)) {
            echo "<td>".$row[UserID]."</td>";
            echo "<td>".$row[ScheduleID]."</td>";
            echo "<td>".$row[ActivityID]."</td>";
            echo "<td>".$row[ActivityName]."</td>";
            echo "<td>".$row[startTime]."</td>";
            echo "<td>".$row[endTime]."</td>";
            echo "<td>".$row[Date]."</td>";
            echo "<td>".$row[AMPM]."</td>";       
        }
    }
    ?>     
    </tr>  
</table>

<?php include 'footer.php';?>