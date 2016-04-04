<?php
$db ="softeng";
$password = "softeng";
$username = "root";

$con = $mysql_connect("localhost",$username, $password,$db);
if(!$con)
{
	die('Not connected' .mysql_error());
}

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp, "uploaded/".$name);
	$url = "http://softeng.mikedlv.com/$name";
	mysql_query("INSERT INTO 'videos' VALUE ('','$name','$url')");
	
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
	echo "<br />".$name." has been uploades";
}


?>

</body>


 
