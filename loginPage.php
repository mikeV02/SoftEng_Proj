<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>CSCE Group 15's project</title>

	<script type="text/javascript">
	function login_Validation() {
		// if id and password not matching from database return false 
		// else return true
		return ret;
	</script>
	<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<h1>Welcome to CSCE Group 15's project page</h1>
	<body align="center" style="background-color:#247">
	<!--ADDED BY MIGUEL
		This is using PHP to work with the DataBase
	-->
	
	<?php
		$user_name = "root";
		$password = "softeng";
		$database = "softeng";
		$server = "localhost";
		
		$db_handle = mysql_connect($server, $user_name, $password);
		$db_found = mysql_select_db($database, $db_handle);
		
		$username=$_POST["user_log"];
		//echo $_POST["password_log"];
		
		$query=sprintf("SELECT ID, user_pass, user_email, display_name FROM users WHERE user_login = '%s'"
				, mysql_real_escape_string($username));

		if ($db_found) {
			$result = mysql_query($query);
			if ($result && mysql_num_rows($result) > 0)
			{
				$row=mysql_fetch_assoc($result);
				echo $row['user_email']; 
				
				$ps=$row['user_pass'];
				$eps=$_POST["password_log"];
				
				//HASH BY MIGUEL
				$hashpass = hash("sha256", $eps);
				
				if ($ps==$hashpass)
				{
					//Trying to set SESSION ID
					//session_start();
					// Store Session Data
					//$_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
					//echo $_SESSION['login_user'];
					
					$redirect=sprintf("http://softeng.mikedlv.com/mainPage.php?userID=%s"
					, mysql_real_escape_string($username));
					
					echo "<script type='text/javascript'>
					window.location.href='$redirect';
					</script>";
				
				}
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

<!--END MIGUEL
		I also modifiend the next code to make the form call the same page to use the code above
		to check the database.
		We could create an intermedian page to check credentials before going to mainPage.
		I was trying some code, and I got to send the credentials via GET to the main page to
		show the username in that page.
		
		It's better to use php t manage the database as we execute it on the server,
		and we do not reaveal sensitive data
		
	action="mainPage.php"-->
<div class="container">
  <h2>Login Form</h2>
  <form role="form">
    <div class="form-group">
      <label for="user_log">User ID:</label>
      <input type="text"  class="form-control" id="user_log" placeholder="Enter ID">
    </div>
    <div class="form-group">
      <label for="password_log">Password:</label>
      <input type="password" class="form-control" id="password_log" placeholder="Enter password">
    </div>
   
    <button type="submit" class="btn btn-default">Login</button>
  </form>
</div>
	</body>
</html>
