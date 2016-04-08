<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CSCE Group 15's project</title>

	<head>
		<title>	CSCE Group 15's project</title>
	<script type="text/javascript">
 	</script>
	
	</head>
<h1>Welcome to CSCE Group 15's project page!</h1>
	<body align="center " style="background-color:#172" >	
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Welcome to Video Hog!</h1>
    <img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="200" height="100">
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Visitor</h3>
      	<form align="center " id = "startGform" action="guestLogin.php" method="post" onsubmit="return guestC_Validation()" >
	<p  id="pCreate">Please click <input type="submit" value="here">to login as a visitor</p>
	</form>
    </div>
    <div class="col-sm-4">
      <h3>Create Account</h3>
     <form id = "startCform"  align="center " action="newAccount.php" method="post" onsubmit="return guestC_Validation()" >
	<p  id="pCreate">Please click <input type="submit" value="here"> to create a new account</p>
	</form>
    </div>
    <div class="col-sm-4">
      <h3>Log in</h3>        
      <form id = "startLform" align="center " action="loginPage.php" method="post" onsubmit="return guestL_Validation()" >
	<p  id="pLogin">Please click <input type="submit" value="here">  to log in your account</p>
	</form>
    </div>
  </div>
</div>

</body>
</html>

<!-- 5ef4e0f21597916154413612f706fc7cee674bfd-->
