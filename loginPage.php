<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
-->

	<head>
		<title>	Video Hog</title>
		
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet" />
		<link href="home/default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="home/fonts.css" rel="stylesheet" type="text/css" media="all" />
		
		<link rel="stylesheet" href="style.css">   
	</head>

<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : Pastime 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140107
-->

<body>
<link rel="stylesheet" href="style.css">   
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
	<!--ADDED BY MIGUEL
		This is using PHP to work with the DataBase
	-->
	
	<?php
		if(isset($_SESSION["user"]))
		{
			$redirect=sprintf("http://softeng.mikedlv.com/mainPage.php");
					
			echo "<script type='text/javascript'>
				window.location.href='$redirect';
				</script>";
		}
		
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
				
				$ps=$row['user_pass'];
				$eps=$_POST["password_log"];
				
				//HASH BY MIGUEL
				$hashpass = hash("sha256", $eps);;
				
				if ($ps==$hashpass)
				{
					// SESSION ID by Miguel
					$_SESSION['valid'] = true;
					
					$_SESSION["user"] = $username;
					$redirect=sprintf("http://softeng.mikedlv.com/mainPage.php");
					
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
 
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
	<!-- <form action="#" -->
    <form method="post" onsubmit="true">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" id="user_log" name="user_log" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password_log" id="password_log" placeholder="Password">
        </div>

        <button type="submit" class="float">Login</button>
       </form>
 		</div>
 </div>

</body>
</html>
