<?php
/*
if (isset($_POST['videoToFind'])) 
{
$db = "softeng";
$password = "softeng";
$username = "root";
$db2 = "videos";
$con = mysqli_connect("localhost", $username, $password, $db) OR die('Could not connect to SQL:'. mysqli_connect_error());
//display videos that are in database
$sql = "SELECT * FROM videos ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "url: " . $row['url']. "<br>";
    }
} else {
    echo "0 results";
}
echo"<video width='320' height='240' controls>";
echo"<source src='videos/tst2.mp4' type='video/mp4'>";

echo " Your browser does not support the video tag.";
echo "</video>";
mysqli_close($con);
}
*/
echo "hello";
?>
