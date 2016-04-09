<?php
if (isset($_POST['videoToFind'])) 
{
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
        //echo "url: " . $row['url']. "<br>";
    }
} else {
    echo "0 results";
}
//to do:
//check if the name searched exists in the data base and then play the video
//if it does not exist show an error message
echo"<video width='320' height='240' controls>";
echo"<source src='videos/tst2.mp4' type='video/mp4'>";
echo " Your browser does not support the video tag.";
echo "</video>";
mysqli_close($con);
}
?>

<!doctype html>
<html lang="en-US">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<head>

<meta charset = "utf-8">
<title> Find Video</title>
</head>

<h1 align="center"> Find Video  </h1>

<body>

<form align="center" action="findVideo.php" method="POST">
 <div ng-app="">
  <p> Video name: <input type="text" name="videoToFind" ng-model="name" placeholder="Enter name here"></p>
  <h1>Search {{name}}</h1>
  <input type="submit" value="Submit">
</div>
</form>
<form id="goBackMain" align="center" action="mainPage.php" method="POST">
<p> Go back to <input type="submit" value="MainPage"></p>  
</form>
</body>
</html>
