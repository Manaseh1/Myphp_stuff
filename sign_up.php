<?php
session_start();
include("conn.php");
include("function.php");


    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        //Something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $user_id = random_num(20);
            $hashpassword=password_hash($password,PASSWORD_DEFAULT);

            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$hashpassword')";  
            mysqli_query($conn, $query);
            header("Location: login.php");
            die;
        }
        else{
            echo "Please enter some valid information!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
   <form action="" method="post">
    <input type="text" name="user_name" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="Sign up" placeholder="login"><br><br>
    <a href="login.php"> Click to login</a>
   </form>
</body>
</html>