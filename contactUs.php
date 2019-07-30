<!--Ability to leave a message for the creator. will try to connect to an email address somehow -->

<?php include "header.php"; ?>

<form action = "submitContact.php" method = "post" name = "contact">
    <p> Please enter your information and someone will get back to you shortly.</p><br>
    First Name<input type="text" name ='fname' value =''><br>
    Last Name<input type="text" name='lname' value=''><br>
    Email Address<input type='email' name='email' value=''><br>
    Message<textarea type='text' name='message' rows='7' cols="50"></textarea><br>
    
    <input type="submit" name="submit">
</form>

<?php include "footer.php"; ?>
