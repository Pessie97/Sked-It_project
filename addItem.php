

<?php


    if (isset($_SESSION['LoggedIN'])&& $_SESSION['LoggedIN']==true){
        echo "Welcome "  . $_Cookie['username'];
        echo "<script>\n
    window.location.href = 'Activities.php';\n
</script>";
    }
    else{
        echo "Not logged in";
        //echo "<a href='signup.php'>Log in</a>";
        echo "<script>\n
    window.location.href = 'join.php';\n
</script>";
    }
    
    
    
?>
