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
			<li><a href="loginPage.php" accesskey="3" title="" color="white">Login</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>

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
	if(!$con){
		die('Not connected : '.mysql_error());
	}
		
	$sql = "INSERT INTO users VALUES(NULL, '$fname', '$lname', '$user_nam', '$hashpass', '$uemail', NULL, 0, '$user_nam')";
	//Username check in db by Fabian M.
	$check= "SELECT * FROM users WHERE user_login = '$user_nam' ";
	$rs = mysqli_query($con,$check);
	if((isset($user_nam)) && (isset($uemail)) && (isset($passreg)) && (isset($passcheck))){
		if($data = mysqli_fetch_array($rs, MYSQLI_NUM)){
			echo "User already exists in our records.";
			$redirect2=sprintf("http://softeng.mikedlv.com/newAccount.php");
			$message2 = "Username already exists! Try again";
			echo "<script type='text/javascript'>
				alert('$message2');
				</script>";
			mysqli_close($con);
			echo "<script type='text/javascript'>
				window.location.href='$redirect2';
				</script>";
		}	else{

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
		}
	}
?>
		
<!-- added by Fabian M. -->	
<h1><i><b> Create a new HogAccount! </i></b></h1>
<div class="container" align="center">
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

