
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());

//display videos that are in database
$sql = "SELECT * FROM videos ";
$result = mysqli_query($con, $sql);
$stack = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "url: " . $row['name']. "<br>";
        array_push($stack, $row['name']);
    }
} else {
    echo "No results";
}
if(isset($_POST["Search"]))
{
	echo $_POST['searchFile'];
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

<body align ="center" style="background-color:#214>
 
<form action = "uploadvideo.php"  align="center" method = "POST" enctype ="multipart/form-data">
	
<input type="text" name="searchFile" id="searchFile" value=""><br>

<input type="submit" value="Search">
  
</form>
   
</body>
</html>
