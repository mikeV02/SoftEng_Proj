
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());

//display videos that are in database
$sql = "SELECT * FROM videos ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "url: " . $row['url']. "<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($con);
?>
<!doctype html>
<html>
<head>

<meta charset = "utf-8">
<title> Find Video</title>
</head>

<h1 align="center"> Find Video  </h1>

<body align ="center" style="background-color:#114>

<form action = "findVideo.php"  align="center" method = "POST" enctype ="multipart/form-data">
	
<input type="text" name="searchFile" id="searchFile" value=""><br>

<input type="submit" value="Search">
/*somebody need to write php or validation function it show result of search.*/
</form>
</body>
</html>
