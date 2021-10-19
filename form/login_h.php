<?php


        if($_SERVER['REQUEST_METHOD']=='POST'){
                    include 'notes.php';
                    $lemail=$_POST['loginEmail'];
                    $lpass=$_POST['loginPass'];
                 
                 
                 $que="SELECT * FROM `usersign` where user_email='$lemail'";
                $res=mysqli_query($conn,$que);
                $row=mysqli_num_rows($res);

                if($row==1){
                    $ne=mysqli_fetch_assoc($res);
                   

                        if(password_verify($lpass,$ne['user_pass'])){

                                session_start();
                               
                                $_SESSION['loggedin']=true;
                                $_SESSION['useremail']=$lemail;
                               
                              
                                
                             
                                header("Location:in.php");
                                echo 'welcome';
                               
                                
                    

                        } 
            
                else {
                    
                    header("Location:in.php");
                }
            }
        }
       