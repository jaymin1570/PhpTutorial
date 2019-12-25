<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="testphp.php" method="POST">
        Date of Birth: <input type="date" name="d" value="<?php echo date('d-m-Y') ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>