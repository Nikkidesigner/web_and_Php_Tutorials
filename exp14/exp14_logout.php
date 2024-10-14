<?php
   session_start();
   
   // Unset session variables
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   // Notify user about session cleanup and redirect to login page
   echo 'You have cleared the session';
   header('Refresh: 2; URL = exp14_login.php'); // Redirects to login.php after 2 seconds
?>
