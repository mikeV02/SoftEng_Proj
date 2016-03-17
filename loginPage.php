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
		$user_name = "root";
		$password = "softeng";
		$database = "softeng";
		$server = "localhost";



$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
$username="admin";
$query=sprintf("SELECT ID, user_pass, user_email, display_name FROM users WHERE user_login = '%s'"
		, mysql_real_escape_string($username));

		if ($db_found) {
			$result =mysql_query($query);
			if ($result && mysql_num_rows($result) > 0)
			{
				$row=mysql_fetch_assoc($result);
				echo $row['user_email']; 
    			}
			else
    			{
    				echo 'Username and Password NOT Found';
    			}
		}
		else {
			print "Database NOT Found.";
			mysql_close($db_handle);
		}
	?>

	<form id = "loginform" action="mainPage.php" method="post" onsubmit="return login_Validation()" >
		User ID  : <input style="margin-left:16px" type="text" name="user_log" id= "user_log" value=""><br><br>
		Password : <input style="margin-left:2px" type="text" name="password_log" id= "password_log" value=""><br><br>
		<input type="submit" value="Login">
	</form>
	
	</body>
</html>
