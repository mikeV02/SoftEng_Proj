
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CSCE Group 15's project</title>

	<head>
		<title>	CSCE Group 15's project</title>
	<script type="text/javascript">
 	</script>
	
	</head>
<h1>Welcome to CSCE Group 15's project page</h1>
	<body style="background-color:lightgrey"  columns-2>	


	<div id="videoTag">
		<video width="600" style="float: left; margin-bottom:30px;margin-right:30px;" controls>
		<source src="rabbit.mp4" type="video/mp4">
		Your browser does not support HTML5 video.
		</video>
	</div>
	
	
	
	

	<p> 
	    Welcome ' <?php echo $_GET["userID"]; ?>' to Gorup15's project page.<br>
	<a href="#">New videos <span class="badge">5</span></a><br>
	<a href="#">Comments <span class="badge">10</span></a><br>
	<a href="#">Updates <span class="badge">2</span></a>


	<form id = "startSform" align="left " action="uploadvideo.php" method="post" >
	<p  id="sunmit">Please click <input type="submit" value="here"> to upload a video </p>
	</form>
	<br>
	<form id = "startFform" align="left " action="findVideo.php" method="post" >
	<p  id="sunmit">Please click <input type="submit" value="here"> to find a video </p>
	</form>
	<form id = "startWform" align="left " action="playVideo.html" method="post" onsubmit="return guestL_Validation()" >
	<p  id="pLogin">Please click <input type="submit" value="here">  to watch a video</p>
	</form>
	<br>
   
	recent view videos<br>
	</p>
	
	<form id = "aboutUs" align="left " action="aboutUs.php" method="post" >
	<input type="submit" value="about us"> 
	</form>
	
	<form id = "logout" align="left " action="index.php" method="post" >
	<p  id="logout">Please click <input type="submit" value="here"> to logout </p>
	</form>
	
	
	
	
	</body>
</html>
