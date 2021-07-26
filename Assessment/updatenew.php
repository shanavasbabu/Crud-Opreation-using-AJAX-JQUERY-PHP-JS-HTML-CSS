<?php
//require "config.php";
// require "sample.php";
define('DB_NAME','db1');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_HOST','localhost');
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$con)
    {
        die('Could not connect:'.mysqli_connect_error());
    }

// echo "Hi I am updated";
$Id = $_REQUEST['Id'];
    if(count($_POST)>0) {
        mysqli_query($con,"UPDATE `details` set fullName='" . $_REQUEST['fullName'] . "',  email='" . $_REQUEST['email'] . "' ,phoneNo='" . $_REQUEST['phoneNo'] . "' WHERE Id='$Id'");
        $message = "Record Modified Successfully";
    }
    mysqli_close($con);
    echo "Record Modified Successfully";
?>