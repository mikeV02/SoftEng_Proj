
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CSCE Group 15's project</title>

<script type="text/javascript">

function account_Validation() {
	//Whatever was here was not doing anything.
}
</script>


<!-- Added by Fabian Monasterio -->
<!-- Code below should create new user in the database without any problems. -->
<?php

	$user_nam = $_POST["uname"];
	$uemail	= $_POST["uemail"];
	$passreg = $_POST["passw"];
	$passcheck = $_POST["pass2"];
	
	$db = "softeng";
	$password = "softeng";
	$username = "root";
	$db2 = "users";
	$con = mysqli_connect("localhost", $username, $password, $db);
	$sql= "INSERT INTO users (ID, user_login, user_pass, user_email, user_registered, user_status, display_name) 
		VALUES(NULL, '$user_nam', '$passreg', '$uemail', NULL, 0, '$user_nam')";
	if(!$con){
		die('Not connected : '.mysql_error());
	}
	if((isset($user_nam)) && (isset($uemail)) && (isset($passreg)) && (isset($passcheck))){
		echo "All data Inserted.";
		if($passreg == $passcheck){
			$result = mysqli_query($con, $sql);
			if(isset($result)){
				//Pop up Added by Miguel
				$message = "Account Created";
				echo "<script type='text/javascript'>alert('$message');</script>";
				sleep(5);
				$redirect=sprintf("Location: http://softeng.mikedlv.com/mainPage.php?userID=%s"
				, mysql_real_escape_string($username));
				mysqli_close($con);
				header($redirect);
			} else{
				echo "Please make sure both passwords match";
			} 
		} else{
			echo "Please make sure both passwords are the same.";
		}

	}
?>

	<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<h1>Welcome to CSCE Group 15's project page</h1>
	<body align="center" style="background-color:#540">
<!-- added by Fabian M. -->			
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
		<input type="text" name="passw" id="passw" value=""><br>
		Confirm Password*:
		<input type="text" name="pass2" id="passw2" value=""><br>
		
	<input type="submit" value="Register">
	</form>
</body>
</html>

