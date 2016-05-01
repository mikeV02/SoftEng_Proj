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
	echo $video_tmp_name;
	 
	*/
	
	if($video_name ==''){echo "<script>alert('Select a Video.')</script>";exit(); }
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
<head>
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
<script type="text/javascript"></script>


<title > Video Upload </title>
	
</head>
<!--<body style="background-color:#322"  >-->
<body>
<div class="container">
		<div class="jumbotron">
			<div class="row">
    				<div class="col-sm-8">
    					<h1 align="center">Upload Video </h>
    				</div>
    				<div class="col-sm-4">
    					<img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="220" height="150">
    				</div>
    			</div>
  		</div>
  	</div><br><br>
  		<form action = "uploadvideo.php"  align="center" method = "POST" enctype ="multipart/form-data">
  			<div class="row" align="center">
				<input   type="file" name = "video">
			</div><br><br>
			<div class="row" align="center">
				<input type="submit"  name= "upload" value="Upload video">
			</div>
		</form>
	<br><br><br><br>
	<form id="goBackMain" align="center" action="softeng.mikedlv.com" method="POST">
		<p> Go back to <input type="submit" value="MainPage"></p>  
	</form>

<?php

if(isset($_POST['upload']))
{
	echo "<br />".$name." has been uploaded";
}


?>

</body>

</html>
 
