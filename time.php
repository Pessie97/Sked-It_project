<!--Populates drop down in the activities page from the database -->
<select name = 'ampm'>    
    <?php
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        $result = $mysqli -> query('select ID, Description from AMPM');
        //echo " <select name = activityType>";
        while ($row = $result->fetch_assoc()) {
            unset($id, $description);
            $id = $row['ID'];
            $description = $row['Description'];
            echo '<option value="' . $id . '">' . $description . '</option>';
        }
    }

    //echo "</select>"
    ?>
</select>
