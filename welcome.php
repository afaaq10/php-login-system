<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header('location:login.php');

}
require 'all.php';
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
    
  
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  
  <?php
   
  
   
        echo 'Welcome '.$_SESSION['username'];
   
    ?>
    <p> You are welcome to our brand new website</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
      <a href="logout.php">Logout</a>
  </p>
</div>
    </div>
</body>
</html>