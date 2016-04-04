
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
$result = mysqli_query($con, "SELECT url FROM videos);
$row = mysqli_fetch_assoc($result);
if (!$row)
{
$error = 'Error - there are no videos';
include 'error.php';
exit();
}
$url = $row['url'];
echo implode(',',$url);
mysqli_close($con);
?>
<!doctype html>
<html>
<head>

<meta charset = "utf-8">
<title> Find Video</title>
</head>

<h1> Find Video  </h1>

<body>

<p>Find video</p>



</body>
</html>
