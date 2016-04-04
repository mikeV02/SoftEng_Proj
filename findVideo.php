
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$conn = mysqli_connect("localhost", $username, $password, $db);
if(!$conn)
{
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT url FROM videos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Url: " . $row["ulr"]"<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
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
