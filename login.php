<?php

// connecting to a database
$login=false;
$serror=false;
$server_name='localhost';
$user_name='root';
$password='';
$database='users';
$conn=mysqli_connect($server_name,$user_name,$password,$database);
if (!$conn) {
   die('could not connect');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <?php
    require 'all.php';
   if( $_SERVER['REQUEST_METHOD']=="POST"){
      $username= $_POST['username'];
      $password= $_POST['password'];
      $qu="Select * from user WHERE username='$username'";
      $res=mysqli_query($conn,$qu);
      $row=mysqli_num_rows($res);
     
   if($row==1){
       while($f=mysqli_fetch_assoc($res)){
       
                if(password_verify($password, $f['password'])){
                            $login=true;
                            session_start();
                            $_SESSION['username']=$username;
                            $_SESSION['loggedin']=true;
                            header('location:welcome.php');

           }
           else{
            $serror='invalid credentials';
        }
       }
      

   }
   else{
       $serror='invalid credentials';
   }
}
  ?>

 
<form action="login.php" method="post">
    <div class="container mt-4 ">
        <h1 class="text-left">Login here</h1>
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
 
  <button type="submit" class="btn btn-primary col-md-6">Login</button>
</form>

</body>
<div class="container my-3">
<?php


if($login){

    echo '<br>'.'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You are logged in</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> ';
 
   }
   if($serror){
    echo '<br>'.'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid credentials.</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> ';
    }
?>
</div>
</html>