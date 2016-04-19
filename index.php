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
@import "bourbon";

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);

$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;

* {
  margin: 0;
  padding: 0;
}

html { 
  background: url(https://dl.dropboxusercontent.com/u/159328383/background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
  background: transparent;
}

body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}

@mixin normalize-input {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;

  .heading {
    text-align: center;
    margin-top: 1%;

    h2 {
      font-size: 3em;
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7);
      display: inline-block;
      padding-bottom: 5px;
      text-shadow: 1px 1px 3px $shadow-color;
    }
  }

  form {
    .input-group {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      border-top: 1px solid rgba(255, 255, 255, 0.1);

      &:last-of-type {
        border-top: none;
      }

      span {
        background: transparent;
        min-width: 53px;
        border: none;

        i {
          font-size: 1.5em;
          color: rgba(255, 255, 255, 0.2);
        }
      }
    }

    input.form-control {
      @include normalize-input;

      padding: 10px;
      font-size: 1.6em;
      width: 100%;
      background: transparent;
      color: $input-color;

      &:focus {
        border: none;
      }
    }

    button {
      margin-top: 20px;
      background: $button-background-color;
      border: none;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 100%;
      border-radius: 3px;
      color: lighten($button-background-color, 40%);
      border-bottom: 4px solid darken($button-background-color, 10%);

      &:hover {
        background: tint($button-background-color, 4%);
        -webkit-animation: hop 1s;
        animation: hop 1s;
      }
    }
  }
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

.float:hover, .float:focus, .float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}

/* Large Devices, Wide Screens */

@media only screen and (max-width : 1500px) {
}

@media only screen and (max-width : 1200px) {
  .login {
    width: 600px;
    font-size: 2em;
  }
}

@media only screen and (max-width : 1100px) {
  .login {
    margin-top: 2%;
    width: 600px;
    font-size: 1.7em;
  }
}

/* Medium Devices, Desktops */
@media only screen and (max-width : 992px) {
  .login {
    margin-top: 1%;
    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}

/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {
  .login {

    h2 {
      margin-top: 0;
    }

    margin-top: 0;
    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}

<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href=>Video Hog</a></h1>
	</div>
	<div id="menu">
		<ul>
			<!--<li class="current_page_item"><a href="http://softeng.mikedlv.com/" accesskey="1" title="">Homepage</a></li> -->
			<li><a href="loginPage.php" accesskey="3" title="">Login</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
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
			<li><a href="home/video.html" class="button">Find featured videos</a></li>
		</ul>
	</div>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="float">Login</button>
       </form>
 		</div>
 </div>
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
