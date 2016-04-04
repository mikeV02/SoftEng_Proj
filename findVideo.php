
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());
mysql_select_db('videos');
//display videos that are in database

$query = "SELECT * FROM videos";
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['url'] . "</td><td>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
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
