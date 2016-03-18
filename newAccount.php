
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

/*
	Making some changes to test FABIAN
*/

<?php

	$fname = $_POST["userfname"];
	$lname = $_POST["userlname"];
	$usernam = $_POST["usernam"];
	$uemail	= $_POST["useremail"];
	$passreg = $_POST["password"];
	$passcheck = $_POST["password2"];
	
	$confir ="false";
	$db = "softeng";
	$password = "softeng";
	$username = "root";

	if($uemail && $passreg && $passcheck && &usernam){
		if($passreg == $passcheck){
			$con = mysql_connect('localhost', $username, $password) or die("Unable to log into database");
			$db_found = mysql_select_db($db, $con) or die ("Unable to connect to specific database.");
	
			mysql_query("INSERT INTO users VALUES($usernam, $passreg, $uemail, CURRENT_TIMESTAMP, 1, $fname)") or die ("Not able to Register");
			echo "Account Created";
			mysql_close($con);
			$redirect=sprintf("Location: http://softeng.mikedlv.com/mainPage.php?userID=%s"
				, mysql_real_escape_string($username));
				header($redirect);
		} else{
			echo "Please make sure both passwords are the same.";
		}
		
	} else{
		echo "You need to have both the email and passwords fields filled."
	}

?>
	<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<h1>Welcome to CSCE Group 15's project page</h1>
	<body align="center" style="background-color:#540">	

	<form action=".php" method="post">
		First Name:
		<input type="text" name="userfname"><br>
		Last Name:
		<input type="text" name="userlname"><br>
		Username*: 
		<input type="text" name="usernam"><br>
		Email*:
		<input type="text" name="useremail"><br>
		Password*:
		<input type="password" name="password"><br>
		Confirm Password*:
		<input type="password" name="password2"><br>
		
	<input type="submit" value="Register">
	</form>
	</body>
</html>


/*
	<title>CSCE Group 15's project</title>

<script type="text/javascript">

function account_Validation() {
		
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
		
}
</script>

	<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<h1>Welcome to CSCE Group 15's project page</h1>
	<body align="center" style="background-color:#540">	


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
	</body>
	</html>
*/
