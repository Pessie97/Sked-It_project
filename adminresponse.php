
<?php
session_start();
$_email = $_GET['email'];
$_password = $_GET['password'];


$mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
if ($mysqli->connect_errno) {
    echo "Server connection Error";
    exit;
}
$sql = "select adminid from adminrights where "
        . "useremail='$_email' and userpassword='$_password'";
//$result = mysqli_query($mysqli, $sql);
$result = $mysqli->query($sql);
//echo $result;

if (!$result||mysqli_num_rows($result) == 0) {
    $_SESSION['Passed'] = FALSE;
    //echo  "Error: " . $sql . "<br>" . $mysqli->error;
        echo "<script>\n
    window.location.href = 'index.php';\n
</script>";
        
   
} else {
    //echo "Your in!";
    //echo  "Error: " . $sql . "<br>" . $mysqli->error;
    $_SESSION['Passed'] = TRUE;
    $_SESSION['uName']=$_email;
    
    setcookie('admin', $_email, time() + 4800);
    // echo "<a href = 'addItem.php'>Add Item</a>";
    //echo "<h1>Hello " +$_email;
   echo "<script>\n
    window.location.href = 'database_info.php';\n
</script>";
}
         
      
  
