<?php
    include_once('db.php');
    if(isset($_POST['action']) && $_POST['action'] == 'availability')
    {
        if ($connection->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        else
        {
            $username       = mysqli_real_escape_string($connection,$_POST['username']); // Get the username values
//            echo $username;
//            echo "Connected successfully";
            $query  = "select email from users3 where email='".$username."'";
            $res    = mysqli_query($connection,$query);
            $count  = mysqli_num_rows($res);
            echo $count;

        }
    }
 
?>
