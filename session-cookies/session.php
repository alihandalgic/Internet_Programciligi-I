<?php
session_start();
$_SESSION["username"]="alihandalgıç";
$_SESSION["name"]="alihan";
$_SESSION["surname"]="dalgıç";
$_SESSION["age"]="21";
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
        <?php
        print_r($_SESSION);
        
        
        ?>
</body>
</html>