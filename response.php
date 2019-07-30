
<?php
session_start();
$_email = $_GET['email'];
$_password = $_GET['password'];


$mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
if ($mysqli->connect_errno) {
    echo "Server connection Error";
    exit;
}
$sql = "select userid from authorizedusers where "
        . "username='$_email' and Password='$_password'";
//$result = mysqli_query($mysqli, $sql);
$result = $mysqli->query($sql);

if (!$result||mysqli_num_rows($result) == 0) {
    $_SESSION['LoggedIN'] = FALSE;
    //echo  "Error: " . $sql . "<br>" . $mysqli->error;
        echo "<script>\n
    window.location.href = 'join.php';\n
</script>";
        
   
} else {
    //echo "Your in!";
    //echo  "Error: " . $sql . "<br>" . $mysqli->error;
    $_SESSION['LoggedIN'] = TRUE;
    setcookie('username', 'email', time() + 4800);
    // echo "<a href = 'addItem.php'>Add Item</a>";
    //echo "<h1>Hello " +$_email;
   echo "<script>\n
    window.location.href = 'addItem.php';\n
</script>";
}
         
      
  
