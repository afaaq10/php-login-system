<?php
session_start();
session_unset();
session_destroy();
header('location:login.php');
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require 'all.php';
   
 
    
    ?>
</body>
</html>