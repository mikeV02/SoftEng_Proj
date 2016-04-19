<!doctype html>
<html lang="en-US">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<head>
<meta charset = "utf-8">
<title> Find Video</title>
</head>

<body>
<form align="center" action="findVideo.php" method="POST">
    <div ng-app="">
        <div class="row">
            <div class="col-sm-6" align="right">
                <p> Video name: <input style="margin-left:30px" type="text" id="videoToFind" name="videoToFind" ng-model="videoName" placeholder="Enter name here"></p>
            </div>
            <div class="col-sm-3" align="left">
                <button type="submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>
        </div>
        <h1>You will search "{{videoName}}" </h1>
    </div>
</form>

<?php
if (isset($_POST['videoToFind'])) {

	$vid_name = $_POST['videoToFind'];
	$db = "softeng";
	$password = "softeng";
	$username = "root";
	$db2 = "videos";
	$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());
	if(!$con){
		die('Not connected : '.mysql_error());
	}

	$sql = "SELECT * FROM videos WHERE name = '$vid_name' ";
	$check = mysqli_query($con, $sql);
	if($video = mysqli_fetch_array($check, MYSQLI_NUM)){
		<video width="320" height="240" controls>
		<source src="'$vid_name'.mp4" type="video/mp4">
		</video>
	} else {
		echo "0 results";
	}

mysqli_close($con);
}
?>



<form id="goBackMain" align="center" action="mainPage.php" method="POST">
<p> Go back to <input type="submit" value="MainPage"></p>  
</form>
</body>
</html>




<!--
<!doctype html>
<html lang="en-US">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<head>

<meta charset = "utf-8">
<title> Find Video</title>
</head>
<div class="container">
		<div class="jumbotron">
			<div class="row">
    				<div class="col-sm-8">
    					<h1 align="left">Search Video</h>
    				</div>
    				<div class="col-sm-4">
    					<img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="220" height="150">
    				</div>
    			</div>
  		</div>
  	</div>

<body>
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

<form align="center" action="findVideo.php" method="POST">
    <div ng-app="">
        <div class="row">
            <div class="col-sm-6" align="right">
                <p> Video name: <input style="margin-left:30px" type="text" name="videoToFind" ng-model="videoName" placeholder="Enter name here"></p>
            </div>
            <div class="col-sm-3" align="left">
                <button type="submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
            </div>
        </div>
        <h1>You will search "{{videoName}}" </h1>
    </div>
</form>
<form id="goBackMain" align="center" action="mainPage.php" method="POST">
<p> Go back to <input type="submit" value="MainPage"></p>  
</form>
</body>
</html>
-->
