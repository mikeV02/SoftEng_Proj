<?php
   session_start();
   unset($_SESSION["user"]);
   $_SESSION['valid'] = false;
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = http://softeng.mikedlv.com');
?>
