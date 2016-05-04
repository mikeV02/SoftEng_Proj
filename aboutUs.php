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

</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="http://softeng.mikedlv.com/"><font color="red">Video Hog</font></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="loginPage.php" accesskey="3" title="" >Login</a></li>
			<li><a href="newAccount.php" accesskey="4" title="">Create account</a></li>
			<li><a href="aboutUs.php" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
</div>
<center>
  <table class="table member">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Major</th>
		<th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Diego</td>
        <td>Calderon</td>
		<td>Computer Science</td>
        <td>dacalder@uark.edu</td>
      </tr>
      <tr>
        <td>Miguel</td>
        <td>De Lora</td>
		<td>Computer Engineer</td>
        <td>medekora@uark.edu</td>
      </tr>
	  <tr>
        <td>Fabian</td>
        <td>Monasterio</td>
		<td>Computer Science</td>
        <td>frmonast@uark.edu</td>
      </tr>
	  <tr>
        <td>Jaewung</td>
        <td>Ryu</td>
		<td>Computer Engineer</td>
        <td>jryu@uark.edu</td>
      </tr>
	  <tr>
        <td>Tuan</td>
        <td>Truong</td>
		<td>Computer Science</td>
        <td>tbtruong@uark.edu</td>
      </tr>
    </tbody>
  </table>
  </center>
</div>
</form>
<center>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("youremail@yoursite.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?></center>
</body>
</html>

