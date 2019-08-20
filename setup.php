
<?php

session_start();

$_fname = $_GET['fname'];
$_lname = $_GET['lname'];
$_phone = $_GET['phone'];
$_email = $_GET['email'];
$_password = $_GET['password'];
$_cpassword = $_GET['cpassword'];

if ($_password == $_cpassword) {
    $mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
    if ($mysqli->connect_errno) {
        echo "Server connection Error";
        exit;
    } else {
        //echo "Your in!";
        //$userid = "select max(userid) from userinfo)";
        //++$userid ;
        
            $more = "insert into userinfo (  UserFName, UserLName, UserName, UserEmail, UserPassword, UserPhoneNumber) "
                    . "values( '$_fname', '$_lname','$_email', '$_email', '$_password', '$_phone')";
            //echo 'after insert';
            if ($mysqli->query($more) == TRUE) {

                //echo "New record created successfully";
                $userId = mysqli_query($mysqli,"select userid from userinfo where userEmail = '$_email'");
                $_SESSION['userid']=$userId;
            $sql = "insert into authorizedusers (userid,username, password) select userID, UserEmail, UserPassword from userinfo "
                    . "where userEmail = '$_email'";
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
                $_SESSION['LoggedIN'] = TRUE;
                setcookie('username', $_email, time() + 4800);
                //echo "<a href = 'addItem.php'>Add Item</a>";
                //echo "<h1>Hello " + $_email;
                echo "<script>\n
    window.location.href = 'addItem.php';\n
</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
            } else {
                echo "Error: " . $more . "<br>" . $mysqli->error;
            }
            
        
    }
} else {
    echo "<script>\n
    window.location.href = 'join.php';\n
</script>";
}

         
      
  
