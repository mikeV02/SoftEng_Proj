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
	$video_name = $_FILES["video"]["name"];
	$video_type = $_FILES["video"]["type"];
	$video_size = $_FILES["video"]["size"];
	$video_tmp_name = $_FILES["video"]["tmp_name"];
	
	//Values check by Miguel
	/*echo $video_name;
	echo $video_type;
	echo $video_size;
	echo $video_tmp_name;*/
	
	if($video_name ==''){ echo "<script>alert('Select a Video.')</script>"; exit();}
	
	move_uploaded_file($video_tmp_name, "videos/$video_name");
	//$url="/home/ubuntu/Desktop/Files/";
	$url = "http://softeng.mikedlv.com/videos/$video_name";
	$sql = "INSERT INTO videos (name, url) VALUE ('$video_name','$url')";
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
<title align="center"> Video Upload </title>
</head>

<h1 > Upload Video  </h1>

<body style="background-color:#316"  >

<form action = "uploadvideo.php"  align="center" method = "POST" enctype ="multipart/form-data">
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

</html>
 
