<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CSCE Group 15's project</title>

	<script type="text/javascript">
	function login_Validation() {
		
			<!--ADDED BY MIGUEL-->
			// if id and password not matching from database return false 
			// else return true
			return true;
		
	</script>
<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<h1>Welcome to CSCE Group 15's project page</h1>
	<body align="center" style="background-color:#247">

	<?php
		echo "My first PHP script by MIKE!";
	?>

	<form id = "loginform" action="mainPage.php" method="post" onsubmit="return login_Validation()" >
		User ID  : <input style="margin-left:16px" type="text" name="user_log" id= "user_log" value=""><br><br>
		Password : <input style="margin-left:2px" type="text" name="password_log" id= "password_log" value=""><br><br>
		<input type="submit" value="Login">
	</form>
	
	</body>
</html>
