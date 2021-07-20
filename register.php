<?php
session_start();

if (isset($_SESSION["activer_user_name"])) {
    header("Location: welcome.php");
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) || !empty($password)) {
        $_SESSION["uname"] = $username;
        $_SESSION["pass"] = $password;

        header("Location: login.php");
    }else{
        echo "Please fill out the fields";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="" method="post">
        username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>