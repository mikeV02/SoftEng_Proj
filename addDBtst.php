

    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "softeng");
    $db_found = mysql_select_db("softeng", $link);
     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Attempt insert query execution
    $user="test2";
    $pass="testpass2";
    $mail="tst2@tst.tst";
    $disp="test2";
    $sql = "INSERT INTO users (ID, user_login, user_pass, user_email, user_registered, user_status, display_name)
        VALUES (NULL, '$user', '$pass', '$mail', NULL, 0, '$disp')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);

    ?>

