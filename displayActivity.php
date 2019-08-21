<?php include 'header.php'; ?>
<?php session_start(); $userName=$_SESSION['Name']; ?>
<form action="Activities.php">
<table name ='userinfo ' class="schedule">
    <tr><th><u>Your Schedule </u></th></tr>
    <tr>
        <th>Activity Name</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>AM/PM</th>
        <th>Date</th>
    </tr>
    
         <!--<//?php include 'database.php';?> -->
         <?php
        
         
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        $resultsched = $mysqli -> query("select  ActivityName, startTime, endTime, AMPM, Date  from userSchedule where userName = '$userName'");
      if ($resultsched -> num_rows >0){
        while ($row = mysqli_fetch_array($resultsched)) {//error original one was mysql_fetch_array($result). it was downgraded.
                       
            echo "<tr>";
            echo "<td>".$row["ActivityName"]."</td>";
            echo "<td>".$row["startTime"]."</td>";
            echo "<td>".$row["endTime"]."</td>";
            echo "<td>".$row["AMPM"]."</td>"; 
            echo "<td>".$row["Date"]."</td>";
            echo "</tr>" ; 
        }
    }
    else{
        echo $userName;
        echo "You dont have any entries for your schedule yet";
    }
    
    
    }
    ?>     
    
</table>

<input type ="submit" name="another" value="Add Activity" action="Activities.php">
</form>
  <?php include 'footer.php'; ?>