<?php include 'header.php'; ?>
        
<form action="setup.php" method="get">
    First Name:  <input type='text' name='fname' value=''><br> 
    Last Name: <input type='text' name='lname' value=''><br>
    Phone Number: <input type='number' name='phone' value=''><br>
    Email Address: <input type='email' name ='email' value=''><br>
    Password: <input type='password' name ='password' value=''><br>
    Confirm Password: <input type='password' name='cpassword' value=''><br><br>
    
    
        <input type='submit' name='submit' value='Go'>
    
</form>
       
        
    <?php include 'footer.php'; ?>
