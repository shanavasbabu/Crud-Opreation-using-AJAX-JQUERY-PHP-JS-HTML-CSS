<?php
// error_reporting(E_ALL);
//include ('config.php');
//require "config.php";
define('DB_NAME','db1');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_HOST','localhost');
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$con)
    {
        die('Could not connect:'.mysqli_connect_error());
    }
//echo $con;die();
$Id = $_REQUEST['id'];
$sql = "DELETE FROM details WHERE Id='$Id'";
if (mysqli_query($con, $sql)) {
    echo "<center><h2 style='color:red'>Record deleted successfully</h2></center>";
    echo '<center><a href="index.php">Back</a></center>';
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>