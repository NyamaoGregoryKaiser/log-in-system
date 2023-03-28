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
//read from the database
         $query ="select * from 'users' where 'user_name'='$user_name' limit 1";
         $result = mysqli_query($con,$query);
           if ($result)
            {
                if  ($result && mysqli_num_rows($result)>0)
                        {
                            $user_data= mysqli_fetch_assoc($result);
                            if($user_data['password'] === $password)
                                {
                                    $_SESSION['user_id'] = $user_data['user_id'];
                                    header("location: Index.php");
                                    die;
                                }
                        }   
                
            }
            //echo "wrong username or password";          
}else 
{
   echo "wrong username or password"; 
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
        <form method="POST">
            <div style="font-size : 20px;margin: 10px">Login</div>
            <input type="text"name="user_name"> <br><br>
            <input type="password"name="password"><br><br>
            <input type="submit"name="log In"><br><br>
            <a href="signup.php">click to Signup</a><br><br>
        </form>

    </div>
 </body>
 </html>