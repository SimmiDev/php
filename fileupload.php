<?php

if(isset($_POST["upload"])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $org_name = $_FILES["file"]["name"];
    $temp_name = $_FILES["file"]["tmp_name"];

    echo $org_name." ".$temp_name;

    move_uploaded_file($temp_name,"upload/".$org_name);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">

    Select your file : <input type="file" name="file"><br><br>
    <input type="submit" name="upload" value="submit">

</form>

</body>
</html>