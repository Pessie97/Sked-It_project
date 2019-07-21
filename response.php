
<?php
session_start();
$_email = $_GET['email'];
$_password = $_GET['password'];


$mysqli = new mysqli('127.0.0.1:3308', 'root', '', 'finalproject');
if ($mysqli->connect_errno) {
    echo "Server connection Error";
    exit;
}
$sql = "select authorizeduserid from `authorizedusers` where username='$_email' and Password='$_password'";
//$result = mysqli_query($mysqli, $sql);
$result = $mysqli->query($sql);
if ($result->num_rows <= 0) {
    $_SESSION['LoggedIN'] = FALSE;
    
        echo "<script>\n
    window.location.href = 'addItem.php';\n
</script>";
        
   
} else {
    //echo "Your in!";
    $_SESSION['LoggedIN'] = TRUE;
    setcookie('username', 'email', time() + 4800);
    // echo "<a href = 'addItem.php'>Add Item</a>";
    //echo "<h1>Hello " +$_email;
    echo "<script>\n
    window.location.href = 'addItem.php';\n
</script>";
}
         
      
  
