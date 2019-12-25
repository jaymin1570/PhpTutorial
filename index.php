<?php
    if(isset($_REQUEST["submit"])){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["pass"];
        if(strlen($username)<=8)
        {
            echo "Username should be more than 8 characters";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
   
    <form action="" method="POST">
     Username : <input type="text" name="username"><br><br>
     Pa
     ssword : <input type="text" name="pass"><br><br>
        <br>
        <input type="submit" value="Submit" name="submit">
        </form>
</body>
</html>