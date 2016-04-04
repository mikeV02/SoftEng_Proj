<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$conn = new mysqli("localhost", $username, $password, $db);
if($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT url FROM videos";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "Url: ". $row["ulr"] <br>;
	}
} else{
	echo "No results";
}
$conn->close();
?>

<!doctype html>
<html>
<head>

<meta charset = "utf-8">
<title> Find Video</title>
</head>

<h1> Find Video  </h1>

<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>



<?php
if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploades";
}


?>

</body>
