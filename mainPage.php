<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Video Hog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="main/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
	<!-- Save content -->
	<script src="main/jquery.js" type="text/javascript"></script>
	<script>
		var theContent = $('#content2');// set the content
		
		$('#save').on('click', function(){ // store the new content in localStorage when the button is clicked
			var editedContent 	= theContent.html();
			localStorage.newContent = editedContent;
		});

		if(localStorage.getItem('newContent')) { // apply the newContent when it is exist ini localStorage
			theContent.html(localStorage.getItem('newContent'));
		}
	</script>
		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="main/images/userIcon.jpg" alt="" /></span>
							
							<!-- Display Name by Miguel -->
							<?php
								$user_name = "root";
								$password = "softeng";
								$database = "softeng";
								$server = "localhost";
		
								$db_handle = mysql_connect($server, $user_name, $password);
								$db_found = mysql_select_db($database, $db_handle);
		
								$username=$_SESSION["user"];
		
								$query=sprintf("SELECT fname, lname FROM users WHERE user_login = '%s'"
									, mysql_real_escape_string($username));

								if ($db_found) {
									$result = mysql_query($query);
									if ($result && mysql_num_rows($result) > 0)
									{
										$row=mysql_fetch_assoc($result);
										
										$finame=$row['fname'];
										$laname=$row['lname'];
									}
								}
								mysql_close($db_handle);

								echo "<h1 id='title'>$finame $laname</h1>";
							?>
							<p><a href="logout.php"><img src="https://www.idldisplays.com/images/button-logout.png" width="100" height="50"></a></p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Videos</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Upload video</span></a></li>
								<li><a href="broadcast.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Broadcast</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Other links  Icons -->
						<ul class="icons">
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><strong></strong><br />							
							</header>


						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Featured Videos</h2>
							</header>
							<video width="640" height="480" controls>
							  <source src="main/flower.mp4" type="video/mp4">
							  <!--<source src="main/movie.ogg" type="video/ogg"> -->
							Your browser does not support the video tag.
							</video>
				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Upload Video</h2>
							</header>
					<?php
					$db = "softeng";
					$password = "softeng";
					$username = "root";
					$db2 = "videos";
					$con = mysqli_connect("localhost", $username, $password, $db);
					if(!$con)
					{
						die('Not connected' .mysql_error());
					}
					if(isset($_POST['upload']))
					{
						$video_name = $_FILES["video"]["name"];
						$video_type = $_FILES["video"]["type"];
						$video_size = $_FILES["video"]["size"];
						$video_tmp_name = $_FILES["video"]["tmp_name"];
						if($video_name ==''){ echo "<script>alert('Select a Video.')</script>"; exit();}
						
						move_uploaded_file($video_tmp_name, "videos/$video_name");
						//$url="/home/ubuntu/Desktop/Files/";
						$url = "http://softeng.mikedlv.com/videos/$video_name";
						$sql = "INSERT INTO videos (name, url) VALUE ('$video_name','$url')";
						$result = mysqli_query($con, $sql);
						if(!isset($result)){
							echo("error database");			
						}
					}
					?>
					  <form action = "mainPage.php"  align="center" method = "POST" enctype ="multipart/form-data">
			  			<div class="row" align="center">
						<input   type="file" name = "video">
						</div><br><br>
						<div class="row" align="center">
						<input type="submit"  name= "upload" value="Upload video">
						</div>
					</form>
				<?php
						if(isset($_POST['upload']))
						{
							echo "<br />".$name." has been uploaded";
						}
				?>
						</div>
					</section>
				<!-- Contact 
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>


							<form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div> -->

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Video Hog. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="main/assets/js/jquery.min.js"></script>
			<script src="main/assets/js/jquery.scrolly.min.js"></script>
			<script src="main/assets/js/jquery.scrollzer.min.js"></script>
			<script src="main/assets/js/skel.min.js"></script>
			<script src="main/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="main/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="main/assets/js/main.js"></script>

	</body>
</html>
