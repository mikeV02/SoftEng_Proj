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