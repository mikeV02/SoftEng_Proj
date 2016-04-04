<?php
$db ="softeng";
$password = "softeng";
$username = "root";

$con = $mysql_connect("localhost",$username, $password,$db);
if(!$con)
{
	die('Not connected' .mysql_error());
}


?>

<!doctype html>
<html>
<head>

<meta charset = "utf-8">
<title> Video Upload </title>
</head>

<h1> Upload Video  </h1>

<body>

<form action = "uploadvideo.php" method = "POST">
	<input type="file" name = "video" accept = video/*">
	<input type="submit" name= "submit" value="Upload video">

</form>


<?php

if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploaded";
}


?>

</body>


 
