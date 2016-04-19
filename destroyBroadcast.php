<?php
session_start();
// Retrieve data from Query String
$broadcastName = $_GET['broadcastName'];
unset($_SESSION[$broadcastName]);
?>