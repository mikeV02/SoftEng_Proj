
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CSCE Group 15's project</title>

<script type="text/javascript">

function account_Validation() {
/*
			var email = document.forms["createform"]["email"].value;
            var pass = document.forms["createform"]["password"].value;
			if ((document.forms["createform"]["userId"].value) == "") {
				alert('Password cannot be left blank');
				return false;
			}
			
			if ((document.forms["createform"]["password"].value) == "") {
				alert('Password cannot be left blank');
				return false;
			}
			
			if ((document.forms["createform"]["fname"].value) == "") {
				alert('First name cannot be left blank');
				return false;
			}
			if ((document.forms["createform"]["lname"].value) == "") {
				alert('Last name cannot be left blank');
				return false;
			}

			if ((document.forms["createform"]["email"].value) == "") {
				alert('Email cannot be left blank');
				return false;
			}
			if ((email.search("@") < 0)||(email.indexOf(".") < 0)) {
				alert('Invalid form of email');
				return false;
			}
			
			return true;
*/

}
</script>


<!-- Added by Fabian -->
<?php

	$user_nam = $_POST["uname"];
	$uemail	= $_POST["uemail"];
	$passreg = $_POST["passw"];
	$passcheck = $_POST["passw2"];
	
	$db = "softeng";
	$password = "softeng";
	$username = "root";
	$con = mysqli_connect("localhost", $username, $password, $db);
	//$db_found = mysql_select_db($db, $con);
	$sql= "INSERT INTO users (ID, user_login, user_pass, user_email, user_registered, user_status, display_name) 
		VALUES(NULL, '$user_nam', '$passreg', '$uemail', NULL, 0, '$user_nam')";
	if(mysqli_query($con, $sql)){
		if(($user_nam=="")||($passreg=="")||($passcheck==""))
			echo "Inser your credentials";
		else{
			if($passreg == $passcheck){
				echo "Account Created";
				mysqli_close($con);
				$redirect=sprintf("Location: http://softeng.mikedlv.com/mainPage.php?userID=%s"
				, mysql_real_escape_string($username));
				header($redirect);
			} else{
				echo "Please make sure both passwords are the same.";
			}
			}
		} else{
			echo "ERROR";
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
<!--
		<p>Please fill out the form below to make a new account.</p>	
		<form id = "createform" action="mainPage.php" method="post" onsubmit="return account_Validation()" >
		User ID           : <input  style="margin-left:80px" type="text" name="user" id= "userId" value=""><br>
		Password          : <input style="margin-left:67px" type="text" name="password" id= "password" value=""><br>
		Your first Name   : <input style="margin-left:20px" type="text" name="fname" id= "fname" value=""><br>
		Your last Name    : <input style="margin-left:22px" type="text" name="lname" id="lname" value=""><br>
		Your email address: <input type="text" name="email" id="email" value=""><br>
		<br>
		<input type="submit" value="Create a New Account">
		</form>

-->
