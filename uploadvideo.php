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
	echo $video_name = $_FILES['video']['name'];
	echo $video_type = $_FILES['video']['type'];
	echo $video_size = $_FILES['video']['size'];
	echo $video_tmp_name = $_FILES['video']['tmp_name'];

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

<form action = "uploadvideo.php" method = "POST" enctype ="multipart/form-data">
	<input type="file" name = "video">
	<input type="submit" name= "upload" value="Upload video">

</form>


<?php

if(isset($_POST['upload']))
{
	echo "<br />".$name." has been uploaded";
}


?>

</body>


 
