
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());

//display videos that are in database
$sql = "SELECT url FROM videos";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result))
{
  echo"{$row['url']};
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
