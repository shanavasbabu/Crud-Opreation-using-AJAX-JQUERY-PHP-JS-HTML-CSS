<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Assessment</title>
    <link rel="stylesheet" href="./asstes/css/index.css">
</head>
<body>
    <form name="myform" action="sample.php" method="post" onsubmit="return validateform()">
        <h2>Application Form</h2>
        <input type="hidden" name="Id" id="id">
        <div class="row">
            <label>Full Name</label>
            <input type="text" name="fullName">
            <div class="error" id="nameErr"></div>
        </div>
        <div class="row">
            <label>Email Address</label>
            <input type="text" name="email">
            <div class="error" id="emailErr"></div>
        </div>
        <div class="row">
            <label>Mobile Number</label>
            <input type="text" name="phoneNo" maxlength="10">
            <div class="error" id="mobileErr"></div>
        </div>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset All"/>
    </form>
</body>
<script src="./asstes/js/index.js"></script>
</html>