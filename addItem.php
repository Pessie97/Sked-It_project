
<!--Checks if user is logged in with the info they entered then redirects to the activity page -->
<?php

    session_start();
    if (isset($_SESSION['LoggedIN'])&& $_SESSION['LoggedIN']==true){
        //echo "Welcome "  . $_Cookie['username'];
        echo "<script>\n
    window.location.href = 'Activities.php';\n
</script>";
    }
    else{
        //echo "Not logged in";
        //echo "<a href='signup.php'>Log in</a>";
        echo "<script>\n
    window.location.href = 'join.php';\n
</script>";
    }
    
    
    
?>
