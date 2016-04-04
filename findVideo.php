
<?php
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());

//display videos that are in database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo $result;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["vId"]. "<br>";
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

<h1> Find Video  </h1>

<body>

<p>Find video</p>



</body>
</html>
