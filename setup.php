
<?php

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
    }/*
      $sql = "select authorizeduserid from `authorizedusers` where username=$_email and Password=$_password";
      if (!$result = $mysqli->query($sql)) {
      //echo "query error - data not in DB";
      //echo "<a href = 'join.php'>Sign Up</a>";
      echo "<script>\n
      window.location.href = 'join.php';\n
      </script>";
      $_SESSION['LoggedIN'] = FALSE;
      } */ else {
        //echo "Your in!";
        //$userid = "select max(userid) from userinfo)";
        //++$userid ;

        $more = "insert into userinfo (  UserFName, UserLName, UserName, UserEmail, UserPassword, UserPhoneNumber) "
                . "values( '$_fname', '$_lname','$_email', '$_email', '$_password', '$_phone')";
        if ($mysqli->query($more) === TRUE) {
            echo "New record created successfully";
            //$userId = mysqli_query($mysqli,"select userid from userinfo where userEmail = '$_email'");
            $sql = "insert into authorizedusers (userid,username, password) select userID, UserEmail, UserPassword from userinfo "
                    . "where userEmail = '$_email'";
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
                $_SESSION['LoggedIN'] = TRUE;
                setcookie('username', 'email', time() + 4800);
                //echo "<a href = 'addItem.php'>Add Item</a>";
                //echo "<h1>Hello " + $_email;
                echo "<script>\n
    window.location.href = 'addItem.php';\n
</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        }
    }
} else {
    echo "<script>\n
    window.location.href = 'join.php';\n
</script>";
}

         
      
  
