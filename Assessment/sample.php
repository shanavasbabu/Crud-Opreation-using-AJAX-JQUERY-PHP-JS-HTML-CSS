<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asstes/css/sample.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <title>All Records</title>
</head>
<body>
  <center>
    <h2>All Records</h2>
    <table class="tableStyle">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>MOBILE</th>
    <th>MODIFICATION</th>
    </tr>

    <?php
    define('DB_NAME','db1');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_HOST','localhost');
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$con)
    {
        die('Could not connect:'.mysqli_connect_error());
    }
    $result=mysqli_query($con,"SELECT * FROM details");
    while($row=mysqli_fetch_array($result)){
        $Id = $row['Id'];
        $fullName=$row['fullName'];
        $email=$row['email'];
        $phoneNo=$row['phoneNo'];
    
    ?>
    <tr>
        <td><?= $Id; ?></td>
        <td><?= $fullName; ?></td>
        <td><?= $email; ?></td>
        <td><?= $phoneNo; ?></td>
        <td colspan="2"><button class='delete' data-id='<?= $Id; ?>'>Delete</button> <button class='update' data-id='<?= $Id; ?>'>Update</button></td>
    </tr>
    <?php } ?>
    </table>
    </center>
</body>
<script>
$(document).ready(function(){
$('.delete').click(function(){
  var el = this;
  var deleteid = $(this).data('id');

  var confirmalert = confirm("Are you sure?");
  if (confirmalert == true) {
     $.ajax({
       url: 'delete.php',
       type: 'POST',
       data: { Id:deleteid },
       success: function(response){
           alert(response);
           // Remove row from HTML Table
	        $(el).closest('tr').css('background','tomato');
	        $(el).closest('tr').fadeOut(800,function(){
	        $(this).remove();
	      });
        
         }
       });
  }
});
$('.update').click(function(){
  var updateid = $(this).data('id');

  var confirmalert = confirm("Are you sure update the Records?");
  if (confirmalert == true) {
    location.href="update.php?Id="+updateid;
  }
});
});
</script>
</html>