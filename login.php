<?php
session_start();

if(isset($_SESSION["activer_user_name"])){
    header("Location: welcome.php");
}


if(isset($_POST["login"])){
    if($_SESSION["uname"] == !empty($_POST["lusername"]) && $_SESSION["pass"] == !empty($_POST["lusername"])){
        $_SESSION["activer_user_name"] = $_POST["lusername"];
        header("Location: welcome.php");
        
    }else{
        echo "Invalid Credintials";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        username: <input type="text" name="lusername"><br><br>
        Password: <input type="password" name="lpassword"><br><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>

</html>