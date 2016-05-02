<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Pastime 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140107

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Video Hog</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet" />
<link href="home/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="home/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body>
	
<div id="header" class="container">
	<div id="logo">
		<h1><a href=>Video Hog</a></h1>
	</div>
	<div id="menu">
		<ul>
			<!--<li class="current_page_item"><a href="http://softeng.mikedlv.com/" accesskey="1" title="">Homepage</a></li> -->
			<li><a href="loginPage.php" accesskey="3" title="">
			<?php
				if(isset($_SESSION["user"]))
				{
					echo $_SESSION["user"];
				}
				else
				{
					echo "Login";
				}
			?>
			</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			<?php
				if(isset($_SESSION["user"]))
				{
					echo "<li><a href='logout.php' accesskey='6' title=''>Logout</a></li>";
			
				}
			?>
		</ul>
	</div>
</div>
<div id="banner">
	<div class="container">
		<ul class="staff">
			<li><img src="home/images/pic01.jpg" alt="" /></li>
			<li><img src="home/images/pic02.jpg" alt="" /></li>
			<li><img src="home/images/pic03.jpg" alt="" /></li>
		</ul>
		<div class="title">
			<h2>Share your thoughts</h2>
			<span class="byline"> Learning and sharing as you have not experienced before!</span>
		</div>
		<p></p>
		<ul class="actions">
			<li><a href="playVideo.html" class="button">Find featured videos</a></li>
		</ul>
	</div>


<!--
<div id="page" class="container">
	<div class="title">
		<h2>Nulla luctus eleifend</h2>
		<span class="byline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span>
	</div>
	<p> Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor.</p>
	<ul class="actions">
		<li><a href="#" class="button">Etiam posuere</a></li>
	</ul>
</div>
<div id="featured">
	<div class="container">
		<div class="title">
			<h2>Fusce ultrices fringilla metus</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>This is <strong>Soft String</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
	</div>
	<ul class="actions">
		<li><a href="#" class="button">Etiam posuere</a></li>
	</ul>
</div>
<div id="extra" class="container">
	<div class="title">
		<h2>Praesent scelerisquet</h2>
		<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
	</div>
	<div id="three-column">
		<div class="boxA">
			<div class="box">
				<p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
			</div>
		</div>
		<div class="boxB">
			<div class="box">
				<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>
			</div>
		</div>
		<div class="boxC">
			<div class="box">
				<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p></div>
		</div>
	</div>
	<ul class="actions">
		<li><a href="#" class="button">Etiam posuere</a></li>
	</ul>
</div>
-->
<div id="copyright" class="container">
	<p>&copy; Video Hog. All rights reserved. | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
