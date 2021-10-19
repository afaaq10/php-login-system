<?php



$showError="false";
        if($_SERVER['REQUEST_METHOD']=='POST'){
                    include 'notes.php';
                    $user_email=$_POST['signupEmail'];
                    $user_pass=$_POST['signupPassword'];
                    $user_cpass=$_POST['signupcPassword'];
                    $que="SELECT * FROM `usersign` where user_email='$user_email'";
                    $res=mysqli_query($conn,$que);
                    $row=mysqli_fetch_assoc($res);
                if($row>0){
                    $showError="User already exists";
                

                } 
                else{
                            if($user_pass==$user_cpass){
                            
                                $hash=password_hash($user_pass, PASSWORD_DEFAULT);
                                $sql="INSERT INTO `usersign` ( `user_email`, `user_pass`, `time`) VALUES ( '$user_email', '$hash', current_timestamp())";
                                $res=mysqli_query($conn,$sql);
                                if($res){
                                    $showAlert=true;
                                    header("Location:in.php?signupsuccess=true");
                                    exit();

                                }
                            }
                            else{
                                $showError="Passwords do not match"; 
                            }

                    }
                    header("Location:in.php?signupsuccess=false&error=$showError");
        }


 