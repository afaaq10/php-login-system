<?php


// Notes in comments.....................


// functions in php

// echo strrev($ab);
// echo str_word_count($ab);..counts the words in a string
// echo strlen($ab);
// echo strpos($ab,'is');
// str_replace('what','where',variable name)
//  echo str_repeat($ab,6);
// echo (count($var))... gives length of an array

//...........................






//  Switch statement in php....

// $i=2;
// switch ($i) {
//     case 0:

//        echo 'I am zero';
//         break;

//     case 1:

//         echo 'I am one';
//          break;
    
//     default:
//         echo 'This is default';
//         break;
     
// }







// foreach in php..........

// $a =array('one','two','three');
// foreach ($a as $value) {
//     echo "$value<br/>";
// }





// $n=date('d F Y');.... date function in php
// echo $n;







// function definition in php......... 

// function name($variable){
// $sum=0;  
// foreach ($variable as $key ) {
    
//     $sum+=$key;

// }
// return $sum;
// }
// $marks=[90,95,96,98,99];

// echo " You have obtained ".name($marks)." marks out of 500 <br/>";








// Multi dimensional array......

// $a=array(
//     array(1,2,3),
//     array(9,6,3),
//     array(3,2,3));
//   for ($i=0; $i <count($a) ; $i++) { 
//       for ($j=0; $j<count($a[$i])  ; $j++) { 
       
          
//         echo $a[$i][$j];
//         echo " ";
//       }
//     echo "<br>"; 
//   }






// Local and global variables...........


// $a=20;
// function name(){
//     global $a;
//     $a=50;
//     echo $a;   
// }
// name();
// echo $a; 





// GET and POST methods............

// if ($_SERVER['REQUEST_METHOD']=='POST') {
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//     Your email is <strong>'.$email.'</strong> and password is <strong>'.$password.'</strong>
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div> ';






// connecting to a database useing php....


// $server_name='localhost';
// $user_name='root';
// $password='';
// $database="afaaq";

// $conn=mysqli_connect($server_name,$user_name,$password,$database);

// if (!$conn) {
//   die(' <br><b>sorry could not connect due to</b> '.mysqli_connect_error());
// } else {
//     echo 'connected';
// }




// creating a database in php.....

// $quer="CREATE DATABASE afaaq";
// $res= mysqli_query($conn,$quer);.....to run the query use this fn, it also returns true/false during updating the values in the database

// if ($res) {
//    echo 'Query has been executed successfully';
// } else {
//     echo 'error due to  ->'.mysqli_error($conn);
// }








// creating a table inside your database

// $table="CREATE TABLE `new2_table` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(16) NOT NULL , `age` INT(10) NOT NULL , `roll` INT(10) NOT NULL , PRIMARY KEY (`id`))";
// $res= mysqli_query($conn,$table);
// if ($res) {
//        echo 'Table has been executed successfully';
//     } else {
//         echo 'error due to  ->'.mysqli_error($conn);
//     }








// Inserting data in the columns of your table 

// $insert="INSERT INTO `new2_table` (`id`, `name`, `age`, `roll`) VALUES ('2', '19', 'afaaq', '50')";
// $res2= mysqli_query($conn,$insert);
// if ($res2) {
//     echo 'item has been added';
// } else {
//     echo ' '.mysqli_error($conn);
// }




//Displaying data from the database.... 


// $disp="SELECT * FROM `new3_table`";
// $query=mysqli_query($conn,$disp);
// $row=mysqli_num_rows($query);.....returns the no. of rows in the database
// echo $row;
// while($fetch=mysqli_fetch_assoc($query)){..  returns a row of the database, every time this function gets called.
// echo 'Email :'.$fetch['email']."<br>";........$fetch is an array with email and password as keys(column names in database)
// echo 'Password:'.$fetch['password']."<br>";




// Updating data from datbase using Where clause  ( frtching and updating both)......


// $disp2="UPDATE `new3_table` SET `textarea` = 'cretaion of two updates' WHERE `id` = 41 AND UPDATE `new3_table` SET `textarea` = 'creation of two updates' WHERE `id` = 43";
// $query=mysqli_query($conn,$disp2);
// echo var_dump($query);......  var_dump returns the value of the the variable.
// echo mysqli_affected_rows($conn);






//Deleting data...... (LIMIT 2 )..THIS keyword limits the number of items to be deleted, selected, updated or inserted.

// $disp="DELETE FROM `new3_table` WHERE `password` = 'sasa";
// $query=mysqli_query($conn,$disp)



// ab = '1458';
// console.log(Array.from(ab));.... To make array from any variable;



// include and require in php......
// include 'index.php';
// require 'index.php';




// reading from a file.................

// $fptr=fopen('filename',mode)
// fread($fptr,filesize('name of file'))
// fclose($fptr)
// fgets($fptr)
// fgetc($fptr)
// example......
// while($a=fgets($fptr)){
//     echo $a;
// }

// writing to a file........

// fwrite($ptr,'w')...creates new file and overwrites everything. 
// fwrite($ptr,'a')...data gets appended not overwritten.






// cookies in php....

// A piece of info stored on users machine (browser) to identify him
// when he visits the next time, and display the prefrences accordingly(e.g amazon shows the cloths we visited).
// Always keep non sensitive info in cookies.

//  setcookie('category','books',time()+86400,'/').............name is category and value is books, 
//                                 86400 means seconds in a day and  '/' means use cookie throughout the website.
//  $n=$_COOKIE['category']
// echo $n ......books will get echoed







// sessions in php......used to manage data across multiple pages.

// session_start()
// $_SESSION['username']='afaaq';..creating the session variables
// $_SESSION['favCol']='black';
// echo 'your session is set'

// this above code goes in one file and the rest below in two different files...

// session_start()
// if (isset($_SESSION['username'])){
// echo 'You are logged in'
// }
// else{
//     echo 'Please login to continue'
// }

// session_start()
// session_unset()..to unset all the session variables
// session_destroy().. to destroy the session
// echo 'you are logged out'


// functions in php... 

// header('location:welcome.php').................redirects to welcome.php file
// password_hash($password,PASSWORD_DEFAULT)..... FUNCTION TO CREATE HASH OF A PASSWORD
// password_verify($password, $f['password']).....FUNCTION TO MATCH THE PASSWORD ENTERED BY USER WITH ITS HASH STORED IN THE DATABASE
// $f=mysqli_fetch_assoc($value of the res which has parameters $conn and $queryrun),it is used in while loop.
// $f['password'] is the array of passwords in the database.
// you can use echo multiple times inside php and embed html(bootstrap) in it.






$server_name='localhost';
$user_name='root';
$password='';
$database='users';
$conn=mysqli_connect($server_name,$user_name,$password,$database);
if (!$conn) {
   die('could not connect');
} else {
    echo 'Connected successfully <br>';
}


  



?>




