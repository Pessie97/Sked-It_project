
        <?php
        // put your code here
        $_array_of_usernames = array("pessie97@gmail.com", "mordyys@gmail.com","collegeps97@gmail.com");
         $array_of_passwords = array(12345, 1221, 3232);
        
         
         $_email= $_GET['email'];
        $_password=$_GET['password'];
        
        
               
       
        if (in_array($_email, $_array_of_usernames)){
            if (in_array($_password, $array_of_passwords)){
                $_SESSION['LoggedIN']=TRUE;
                setcookie('username','email', time()+4800);
                echo "<a href = 'addItem.php'>Add Item</a>";
            }
             else{
            echo "<a href = 'join.php'>Sign Up</a>";
            $_SESSION['LoggedIN']=FALSE;
        }
            
        }
        else{
            echo "<a href = 'join.php'>Sign Up</a>";
            $_SESSION['LoggedIN']=FALSE;
        }
        ?>
  
