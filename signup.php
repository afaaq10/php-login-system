<?php

// connecting to a database

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
    <title>Document</title>
</head>
<body>

    <?php
    require 'all.php';
    $salert=false;
    $serror=false;
   if( $_SERVER['REQUEST_METHOD']=="POST"){
      $username= $_POST['username'];
      $password= $_POST['password'];

      $cpassword= $_POST['cpassword'];
      $query="Select * from user WHERE username='$username'";
      $result=mysqli_query($conn,$query);
      $row=mysqli_num_rows($result);
      

      if($row>0){
          $serror='Username already exists';

      }
      else{
   
                if($password==$cpassword){
                    $hash=password_hash($password,PASSWORD_DEFAULT);
                    $qu="INSERT INTO `user` (`id`, `username`, `password`, `time`) VALUES (NULL, '$username', '$hash', current_timestamp())";
                    $res=mysqli_query($conn,$qu);

                    if($res){
                        $salert=true;
                          }
                
                }
                   else {
                       $serror='passwords do not match';
                  
                    }
        }
   }
    ?>


<?php

if($salert){
    echo '<br>'.'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You have successfully signed up</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> ';

}
if($serror){
    echo '<br>'.'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.$serror.'</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> ';
}


?>
 
<form action="signup.php" method="post">
    <div class="container mt-4 ">
        <h1 class="text-left">Signup here</h1>
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength="14" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Passwords should be same</div>
  </div>
 
  <button type="submit" class="btn btn-primary col-md-6">Signup</button>
</form>

</body>
</html>