<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
<script type="text/javascript"></script>

	<title>CSCE Group 15's project</title>

	<head>
		<title>	CSCE Group 15's project</title>
	<script type="text/javascript">
 	function guestL_Validation(){
		return true;
	}
	function guestC_Validation(){
		return true;
	}

	</script>
	</head>
<div class="container">
		<div class="jumbotron">
			<div class="row">
    				<div class="col-sm-8">
    					<h1 align="left">Welcome to Video Hog!</h>
    				</div>
    				<div class="col-sm-4">
    					<img src="indexImage.PNG" class="img-rounded" align "right" alt="Cinque Terre" width="220" height="150">
    				</div>
    			</div>
  		</div>
  	</div>
	<body style="background-color:#229"  columns-2>	


	<div  ><video width="600" style="float: left; margin-bottom:30px;margin-right:30px;" controls>
		<source src="rabbit.mp4" type="video/mp4">
		<source src="rabbit.ogg" type="video/ogg">
		Your browser does not support HTML5 video.
		</video></div>
		
	<div >
	<div  ><video width="600" style="float: left; margin-bottom:30px;margin-right:30px;" controls>
		<source src="rabbit.mp4" type="video/mp4">
		<source src="rabbit.ogg" type="video/ogg">
		Your browser does not support HTML5 video.
		</video></div>
		
	<div >
	<div >	<video width="600" style="float: left; margin-bottom:30px;margin-right:30px;"  controls>
		  <source src="rabbit.mp4" type="video/mp4">
		  <source src="rabbit.ogg" type="video/ogg">
		  Your browser does not support HTML5 video.
		</video></div>
	<div  >	<video width="600"style="float: left; margin-bottom:30px;margin-right:30px;" controls>
		  <source src="rabbit.mp4" type="video/mp4">
		  <source src="rabbit.ogg" type="video/ogg">
		  Your browser does not support HTML5 video.
		</video></div>
	
	
	
	
	<p > You log in as guest if you want to log in or create a new account click button below </p>
	<form id = "guestCform" action="newAccount.php" method="post" onsubmit="return guestC_Validation()" >
	<p  id="pCreate">Please click <input type="submit" value="here"> to create a new account</p>
	</form>
	<form id = "guestLform" action="loginPage.php" method="post" onsubmit="return guestL_Validation()" >
	<p  id="pLogin">Please click <input type="submit" value="here">  to log in your account</p>
	</form>
	
	
	</body>
</html>
