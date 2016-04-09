
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
<script type="text/javascript"></script>
	<head>
		<title>	CSCE Group 15's project</title>
	<h1 align="center">Welcome to CSCE Group 15's project page</h1>
	</head>
	<body style="background-color:lightgrey">	
	<div class ="row">
		<div class="col-sm-4">
			<div id="videoTag">
				<video width="600" height="400" controls>
				<source src="rabbit.mp4" type="video/mp4">
				Your browser does not support HTML5 video.
				</video>
			</div>
		</div>
		<div class="col-sm-4">
			<form id = "startSform" align="center " action="uploadvideo.php" method="post" >
			<p  id="sunmit">Please click <input type="submit" value="here"> to upload a video </p>
			</form>
			<br>
			<form id = "startFform" align="center " action="findVideo.php" method="post" >
			<p  id="sunmit">Please click <input type="submit" value="here"> to find a video </p>
			</form>
			<form id = "startWform" align="center " action="playVideo.html" method="post" onsubmit="return guestL_Validation()" >
			<p  id="pLogin">Please click <input type="submit" value="here">  to watch a video</p>
			</form>
			<br>
   
			<form id = "aboutUs" align="center " action="aboutUs.php" method="post" >
			<input type="submit" value="about us"> 
			</form>
			
		</div>
		<div class="col-sm-4">

			<p> Welcome ' <?php echo $_GET["userID"]; ?>' to Gorup15's project page.<br></p>
			<a href="#">New videos <span class="badge">5</span></a><br>
			<a href="#">Comments <span class="badge">10</span></a><br>
			<a href="#">Updates <span class="badge">2</span></a>
		</div>
	</div>
	<div class="row">
	<form id = "logout" align="right "style="margin-right:50px;" action="index.php" method="post" >
	<p  id="logout">Please click <input type="submit" value="here"> to logout </p>
	</form>
	</div>
	
	
	
	</body>
</html>
