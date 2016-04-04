
<!doctype html>
<html>
<head>

<meta charset = "utf-8">
<title> Video Upload </title>
</head>

<h1> Upload Video  </h1>

<body>

<form action = "uploadvideo.php">
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


 
