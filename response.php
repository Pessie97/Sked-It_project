<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $_array_of_usernames = array("pessie97@gmail.com", "mordyys@gmail.com","collegeps97@gmail.com");
        $_email= $_POST['email'];
        $_password=$_POST['password'];
        
        if (array_key_exists($_email, $_array_of_usernames)){
            header("Location:addItem.php");
        }
        else{
            echo "Invalid username or password";
        }
        ?>
    </body>
</html>
