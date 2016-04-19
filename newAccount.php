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
<div class="navbar navbar-fixed-top" style="width: auto;">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target="nav.collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="http://softeng.mikedlv.com/">
				<!--     <img src="logo.png" alt="VideoHog">    -->
					VideoHog
			</a>
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li><a href="loginPage.php" accesskey="3" title="">Login</a></li>
					<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
					<li><a href="#" accesskey="5" title="">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>	
	
	
	
	
	
	
	
	
	
	
	
<!--
<div id="main">
	<div id="tray" class="topbar" style="width: auto;">
		<div class="fill">
			<div class="container">
				<div id="logo">
					<h1><a href="http://softeng.mikedlv.com/">Video Hog</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li><a href="loginPage.php" accesskey="3" title="">Login</a></li>
						<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
						<li><a href="#" accesskey="5" title="">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- </div>   -->

<!--	
<div id="header" class="container">
	<div id="logo">
		<h1><a href="http://softeng.mikedlv.com/">Video Hog</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="loginPage.php" accesskey="3" title="">Login</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>
-->
<!-- Added by Fabian Monasterio -->
<!-- Code below should create new user in the database without any problems. -->
<?php
	$fname = $_POST["ufname"];
	$lname = $_POST["ulname"];
	$user_nam = $_POST["uname"];
	$uemail	= $_POST["uemail"];
	$passreg = $_POST["passw"];
	$passcheck = $_POST["pass2"];
	
	$db = "softeng";
	$password = "softeng";
	$username = "root";
	
	//HASH BY MIGUEL
	$hashpass = hash("sha256", $passreg);
	
	$con = mysqli_connect("localhost", $username, $password, $db);
	/*$sql = "INSERT INTO users (ID, user_login, user_pass, user_email, user_registered, user_status, display_name)
		VALUES(NULL, '$user_nam', '$passreg', '$uemail', NULL, 0, '$user_nam')";*/
		
	$sql = "INSERT INTO users VALUES(NULL, '$fname', '$lname', '$user_nam', '$hashpass', '$uemail', NULL, 0, '$user_nam')";

	if(!$con){
		die('Not connected : '.mysql_error());
	}

	if((isset($user_nam)) && (isset($uemail)) && (isset($passreg)) && (isset($passcheck))){
		//echo "All data Inserted.";
  		//$query = mysqli_query("SELECT Count(*) FROM users WHERE user_login = '$user_nam'", $con);

		//if(mysqli_num_rows($query) >0){
		//	echo "The username entered already exists. Please try again.";
		//}else{

			if($passreg == $passcheck){
				$result = mysqli_query($con, $sql);
				if(isset($result)){
					//Pop up Added by Miguel
					$message = "Account Created Successfully";
					$redirect=sprintf("http://softeng.mikedlv.com/mainPage.php?userID=%s"
						, $user_nam);
					echo "<script type='text/javascript'>
						alert('$message');
						</script>";
					mysqli_close($con);
					echo "<script type='text/javascript'>
						window.location.href='$redirect';
						</script>";
				} else{
					echo "Please make sure both passwords match";
				} 
			} else{
				echo "Please make sure both passwords are the same.";
			}
		//}
	}
?>


	
		
<!--		
		<title>	CSCE Group 15's project</title>
	</head>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
    				<div class="col-sm-8">
    					<h1 align="left">Welcome to Video Hog!</h>
    				</div>
    				<div class="col-sm-4">
    					<img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="220" height="150">
    				</div>
    			</div>
  		</div>
  	</div>
<body align="center" style="background-color:#540"> -->
		
<!-- added by Fabian M. -->	
<div class="container" >
	<form action="newAccount.php" method="post" onsubmit="true">
		First Name:
		<input type="text" name="ufname" id="ufname" value=""><br>
		Last Name:
		<input type="text" name="ulname" id="ulname" value=""><br>
		Username*: 
		<input type="text" name="uname" id="uname" value=""><br>
		Email*:
		<input type="text" name="uemail" id="uemail" value=""><br>
		Password*:
		<input type="password" name="passw" id="passw" value=""><br>
		Confirm Password*:
		<input type="password" name="pass2" id="passw2" value=""><br>
		
	<input type="submit" value="Register">
	</form>
</div>

</body>
</html>

