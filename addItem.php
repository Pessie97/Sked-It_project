

<?php


    if (isset($_SESSION['LoggedIN'])&& $_SESSION['LoggedIN']==true){
        echo "Welcome "  . $_Cookie['username'];
    }
    else{
        echo "Not logged in";
        echo "<a href='signup.php'>Log in</a>";
    }
    
    
    
?>
