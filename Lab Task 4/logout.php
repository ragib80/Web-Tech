<?php
session_start();
session_destroy();
echo "Logout Sucessful.<br> click here to <a href='login.php'> Login again </a> ";
?>