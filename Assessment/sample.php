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
             echo'<br/><center><h2 style="color:red">Created!</h2></center>';
            echo "<center><h2 style='color:red'>Your account is created!</h2></center>"; 
            echo '<center><p style="color:red;">Thanks for submitting your from.</p><center>';
            echo '<center><a href="index.php">Back</a></center>';
        }
    else{
        echo "ERROR";
    }
    $result=mysqli_query($con,"SELECT * FROM details");
    echo "<br><br>";
    echo "<br><center><table border='1'>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>MOBILE</th>
    <th>MODIFICATION</th>
    </tr>";
    while($row=mysqli_fetch_array($result))
    {
        echo"<tr>";
        echo"<td>".$row['Id']."</td>";
    echo"<td>".$row['fullName']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['phoneNo']."</td>";
    echo "<td><button><a href='delete.php?id=".$row['Id']."'>Delete</a></button> <button><a href='update.php?id1=".$row['Id']."'>Update</a></button></td>";
    //echo "<td><button><a href='update.php?id=".$row['Id']."'>Update</a></button></td>";
    echo"</tr>";
    }
    echo"</table></center>";
    $con->close();
// }
?>