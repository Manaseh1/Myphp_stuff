<?php
session_start();
include("conn.php");
include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
        $id = $_SESSION['user_id'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to database
            $user_id = random_num(20);

            $query = "select * from users where user_name = '$user_name' limit 1";
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data =mysqli_fetch_assoc($result);
                    
                    if($user_data['password']===$password){
                        $_SESSION['user_id'] =$user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "wrng userbame or password";
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
    <title>LOGIN</title>
</head>
<body>
    
   <form action="" method="post">
    <input type="text" name="user_name" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="login" placeholder="login"><br><br>
    <a href="sign_up.php">Sign up</a>
   </form>
</body>
</html>