<?php
session_start();

$_SESSION['LoggedIN'] = FALSE;
echo "<script>\n
    window.location.href = 'signup.php';\n
</script>";

?>