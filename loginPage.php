<!--<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>CSCE Group 15's project</title>

	<head>
		<title>	CSCE Group 15's project</title>
	</head>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
    				<div class="col-sm-8">
    					<h1 align="left">Welcom to Video Hog!</h>
    				</div>
    				<div class="col-sm-4">
    					<img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="220" height="150">
    				</div>
    			</div>
  		</div>
  	</div>
	<body align="center" style="background-color:#247"> -->
<html>
	<body>
	<div class="container">
		<section id="content">
			<form action="">
				<h1>Login Form</h1>
				<div>
					<input type="text" placeholder="Username" required="" id="username" />
				</div>
				<div>
					<input type="password" placeholder="Password" required="" id="password" />
				</div>
				<div>
					<input type="submit" value="Log in" />
					<a href="#">Lost your password?</a>
					<a href="#">Register</a>
				</div>
			</form><!-- form -->
			<div class="button">
				<a href="#">Download source file</a>
			</div><!-- button -->
		</section><!-- content -->
	</div><!-- container -->
	</body>
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
				$hashpass = hash("sha256", $eps);;
				
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
	
<div class="container">
  <h2>Login Form</h2>
  <form align ="center" role="form" method="post" onsubmit="true">
    <div class="form-group">
      <label for="user_log">User ID:</label>
      <input type="text"  class="form-control" name ="user_log" id="user_log" placeholder="Enter ID">
    </div>
    <br><br>
    <div class="form-group">
      <label for="password_log">Password:</label>
      <input type="password" class="form-control" name="password_log" id="password_log" placeholder="Enter password">
    </div>
    <br><br>
   
    <button type="submit" class="btn btn-default">Login</button>
  </form>
</div>
	</body>
</html>
