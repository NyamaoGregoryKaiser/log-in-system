<?php
Session_start();
include("connection.php");
include("function.php");
$user_data = check_login($con);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <a href="logout">Log out</a>
    <br>
hello username 
</body>
</html>