<?php
require "config.php";
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $Id = $_POST['Id'];

    $query="INSERT INTO `details` (`Id`,`fullName`, `email`, `phoneNo`) VALUES ('$Id','$fullName','$email','$phoneNo')";
    // echo $query;
    if($con->query($query) == true)
        {
            echo "User data was inserted successfully";
        }
    else{
        echo "ERROR";
    }
?>