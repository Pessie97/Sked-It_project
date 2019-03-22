
        <?php
     
        
         
         $_email= $_GET['email'];
        $_password=$_GET['password'];
        
        
         $mysqli = new mysqli('127.0.0.1:3308', 'root', '','finalproject');
         if ($mysqli->connect_errno){
             echo "Server connection Error";
             exit;
         }
         $sql = "select authorizeduserid from `authorizedusers` where username=$_email and Password=$_password";
         if (!$result = $mysqli->query($sql)){
             //echo "query error - data not in DB";
               echo "<a href = 'join.php'>Sign Up</a>";
            $_SESSION['LoggedIN']=FALSE;
         }
         else{
             //echo "Your in!";
              $_SESSION['LoggedIN']=TRUE;
                setcookie('username','email', time()+4800);
                echo "<a href = 'addItem.php'>Add Item</a>";
         }
         
      
  
