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
$Id = $_REQUEST['id1'];
if(count($_POST)>0) {
    mysqli_query($con,"UPDATE `details` set fullName='" . $_POST['fullName'] . "',  email='" . $_POST['email'] . "' ,phoneNo='" . $_POST['phoneNo'] . "' WHERE Id='$Id'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($con,"SELECT * FROM `details` WHERE Id='" . $Id . "'");
    $row= mysqli_fetch_array($result);
    mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Records</title>
    <link rel="stylesheet" href="./asstes/css/update.css">
</head>
<body>
<form name="myform" action="" method="post" onsubmit="return validateform()">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
        <h2>Update Details</h2>
        <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
<div class="row">
<label>Full Name</label>
<input type="text" name="fullName" value="<?php echo $row['fullName']; ?>">
<div class="error" id="nameErr"></div>
<br>
</div>
<div class="row">
<label>Email Address</label>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<div class="error" id="emailErr"></div>
<br>
</div>
<div class="row">
<label>Mobile Number</label>
<input type="text" name="phoneNo" value="<?php echo $row['phoneNo']; ?>">
<div class="error" id="mobileErr"></div>
<br>
</div>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset All"/>
    <center><a href="index.php" style="margin-top: 20px;">Back</a></center>
    </form>
</body>
<script src="./asstes/js/index.js"></script>
</html>