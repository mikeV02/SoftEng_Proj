
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
    $videos = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        echo "url: " . $row['name']. "<br>";
        $videos[i] = $row['name'];
        $i = $i +1;
    }
} else {
    echo "0 results";
}
    $arrlength = count($videos);
echo $arrlength;
for($x = 0; $x < $arrlength; $x++) {
    echo $videos[$x];
    echo "<br>";
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
 
<form action = "findVideo.php"  align="center" method = "POST" enctype ="multipart/form-data">
	
<input type="text" name="searchFile" id="searchFile" value=""><br>

<input type="submit" value="Search">
  
</form>
   
</body>
</html>
