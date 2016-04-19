<?php
session_start();
// Retrieve data from Query String
$broadcastName = $_GET['broadcastName'];
$broadcastKey = $_GET['broadcastKey'];
if(isset($_SESSION[$broadcastName]))
{
	echo "NAME_EXIST";
}
else
{
	$_SESSION[$broadcastName] = $broadcastKey;
	echo $broadcastName.$_SESSION[$broadcastName];
}
?>