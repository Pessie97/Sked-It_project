<!--Populates drop down in the activities page from the database -->
<select name = activityType>    
    <?php
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        $result = $mysqli -> query('select activityTypeid, description from activitytype');
        //echo " <select name = activityType>";
        while ($row = $result->fetch_assoc()) {
            unset($id, $description);
            $id = $row['activityTypeid'];
            $description = $row['description'];
            echo '<option value="' . $id . '">' . $description . '</option>';
        }
    }

    //echo "</select>"
    ?>
</select>
