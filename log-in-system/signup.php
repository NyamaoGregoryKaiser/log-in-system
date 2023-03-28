<?php
session_start();
      include("connection.php");
      include("function.php");

 
if ($_SERVER['REQUEST_METHOD']=="POST")
   {
      //Something was posted
      $user_name=$_POST['user_name'];
      $password=$_POST['password'];
      if(!empty($user_name)&& !empty($password)&& !is_numeric($user_name))
      {
   //save to database
               $user_id=random_num(10);
               $query ="insert into users (user_id,user_name,password) values  ('$user_id','$user_name','$password')";
                  
               mysqli_query($con,$query);
                  header("location: login.php");
                  die;
      }else 
      {
         echo "Please enter some valid username"; 
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>signup</title>
</head>
<body>
   <style type="text/css">
#text{
   height:25px;
   border-radius: 5px;
   padding:4px;
   border:solid thin #aaa;
   width: 100%;

}
#button{
   padding:10px;
   width:100px;
   color:white;
   background-color:grey;
   border:none;


}
#box{
   Background-color:grey;
   margin:auto;
   width:300px;
   padding:20px;

}
   </style>
   <div id = "box">
       <form method="post">
           <div style="font-size : 20px;margin: 10px">signup</div>
           <input type="text"name="user_name"> <br><br>
           <input type="password"name="password"><br><br> 
           <input type="submit"name="signup"><br><br>
           <a href="login.php">click to log in</a><br><br>
       </form> 