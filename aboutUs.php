<!DOCTYPE html>
<html lang="en">
<head>
  <title>about us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Video Hog</h2>
             
  <table class="table member">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
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
</div>
</form>
<form id="goBackMain" align="center" action="index.php" method="POST">
<p> Go back to <input type="submit" value="MainPage"></p>  
</form>
</body>
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
        mail("dacalder@email.uark.edu", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
    ?>
    </center>
</html>
