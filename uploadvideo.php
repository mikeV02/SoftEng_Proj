<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db);

if(!$con)
{
	die('Not connected' .mysql_error());
}

if(isset($_POST['upload']))
{
	$name = $_FILES['video']['name'];
	$temp = $_FILES['video']['tmp_name'];
	echo($name);
	move_uploaded_file($temp, "/home/ubuntu/Desktop/Files/videos/".$name);
	//$url="/home/ubuntu/Desktop/Files/";
	$url = "http://softeng.mikedlv.com/video/$name";
	$sql = "INSERT INTO videos (name, ulr) VALUE ('$name','$url')";
	$result = mysqli_query($con, $sql);
	if(!isset($result)){
		echo("error database");			
	}
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
	<input type="file" name = "video">
	<input type="submit" name= "upload" value="Upload video">

</form>


<?php

if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploaded";
}


?>

</body>


 
