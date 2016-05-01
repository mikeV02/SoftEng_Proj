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
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : Pastime 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140107
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Video Hog</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet" />
	<link href="home/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="home/fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="http://softeng.mikedlv.com/">Video Hog</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php" accesskey="3" title="">Home</a></li>
			<li><a href="loginPage.php" accesskey="3" title="">Login</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>

<body>
<form align="center" action="findVideo.php" method="POST">
    <div ng-app="">
        <div class="row">
            <div class="col-sm-6" align="center">
                <p> Video name: <input style="margin-left:30px" type="text" id="videoToFind" name="videoToFind" ng-model="videoName" placeholder="Enter name here">
          <!--  </div>
            <div class="col-sm-3" align="center"> -->
                <button type="submit" class="btn btn-info" align="center">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
                </p>
            </div>
        </div>
        
       <!-- <h1>You will search "{{videoName}}" </h1>   -->
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
	$vid_name .= "%";
	$vid_name = "%".$vid_name;
	$sql = "SELECT * FROM videos WHERE name LIKE  '$vid_name' ";
	echo $sql;
	$check = mysqli_query($con, $sql);
	if($video = mysqli_fetch_array($check, MYSQLI_ASSOC)){
	while($res = mysqli_fetch_array($check, MYSQLI_ASSOC))
	{
		echo"yaya";
		printf ("%s \n", $res["name"]);
		
	}
?>
	
	
<?php
	} else {
		echo "0 results";
		mysqli_close($con);
	}

//mysqli_close($con);
}
?>

</body>
</html>
