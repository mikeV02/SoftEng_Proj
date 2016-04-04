
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
$query = "SELECT text AS txt FROM `videos`";
$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($con), E_USER_ERROR);

if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['txt'] . '<br>';	
	}
}
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
