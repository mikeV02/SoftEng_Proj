<?php
   session_start();
   unset($_SESSION["user"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = ');
?>
