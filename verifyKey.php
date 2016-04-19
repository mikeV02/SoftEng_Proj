<?php
session_start();
// Retrieve data from Query String
$broadcastName = $_GET['broadcastName'];
$userKey = $_GET['userKey'];
if(!isset($_SESSION[$broadcastName]) || $_SESSION[$broadcastName] != $userKey )
{
	echo 1;
}
else
{
	echo 0;
}
?>