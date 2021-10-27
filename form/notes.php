<?php


// php Notes in comments.....................


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
// you can use echo multiple times inside php and embed html(bootstrap) in it without any issue.





// connecting to a database
$server_name='localhost';
$user_name='root';
$password='';
$database='users';
$conn=mysqli_connect($server_name,$user_name,$password,$database);
if (!$conn) {
   die('could not connect');
} 

  











// Objected oriented programming in php with examples................................


//  Basic definiiton of class, method, objects and properties
// class is a template for creating objects. An object has a method(function )
// and properties(function). we sue arrow operator to acces methods and properties inside class


// class Player{

//     public $name;
//     public $age;

//     function set_name($name){
//         $this->name=$name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// $player1=new Player();

// $player1->set_name('Afaaq');
// echo $player1->get_name();
// echo $player1->age;











// constructor.......................................

// a constructor is a function which gets called when an object is created(instantiated).
// The arg inside constructor can be anything but the value with the this keyword(fame here)
// should be same because it is the property of an object.

// class cons{
//     public $name;

//     function __construct($name)

//     {
//        $this->name=$name; 
//        echo $this->name .'<br>';
//     }
// }

// $player1=new cons('Afaaq');
// $player2=new cons('Majeed') ;














// destructor.............................................

// gets called when the php script ends i.e objects get destroyed.
// class cons{
//     public $name;
//     function __construct($name)

//     {
//        $this->name=$name; 
      
//     }

//     function __destruct()
    

//     {
        
//        echo 'Destructing'.$this->name .'<br>';
//     }
// }

// $player1=new cons('Afaaq');
// $player2=new cons('Majeed') ;
















// public --can be accessed  from anywhere in a program

// private-- can be accessed from wthin a class. If you want to acces it outside the class,
//  use object name with the function name and the arrow operator.

// protected-- Just like private but used in inheritance. See velow in inheritance section



// class fact{

//     private $name='assa';
//     public $name2="not private";

//     function __construct()
 
//     {
//         echo $this->name.'<br>';

//     }
//     function neww()
 
//     {
//         echo $this->name2;

//     }


// }
// $pl=new fact();
// echo $pl->name2;





















// Class inheritance public and protected access modifier can be used while inheriting.
// for private you can use it within the class only, by declaring a function inside the class, not outside the class
//  function inside a class is always public


// class employer{
//     public $name='Majeed';
//     private $age;

//     function setname($name){
//         $this->name=$name;
//          echo $this->name;
       
//     }

// }
// class second extends employer{
//     public $roll=22;
//     function showname($roll2){
//         $this->roll=$roll2;
//         echo $this->roll;

//     }
// }
// $ob=new employer();
// $ob2=new second();
// $ob2->setname('Afaqq');
// echo $ob2->roll;
















// protected..........................

// if you define a private fn in a class and then you use inheritance, 
// you won't be able to use this private fn inside the extended class. In order to use
//  this private fn use protected keyword with the function which was declared as private.

// class employer{
//     public $name;

//     function __construct($x){
//         $this->name=$x;
//         $this->setname();

//     }
//     protected function setname(){
//         echo  $this->name;

//     }
// }

// class employer2 extends employer{
//     function __construct($x){
//         $this->name=$x;
//         $this->setname();

//     }

// }
// $ob=new employer2('abc');
    



// create first laravel file ............

// php artisan server.....run this command in cmd to start the server, also you must be in the working directory(e.g blog in my case)

// open   resources folder--> views  and then create a new file there e.g (ab.blade.php)...blade is important
// Then open routes folder and then web.php, inside  web.php change the name in the return view 



// Making a controller................

//  1 use cmd and type php artisan make:controller nameofcontroller
//  2 go to app then Http then the file with the name nameofcontroller... you can write fn as well and call it in routes folder in the file web.php
//  3 go to routes then web.php and then write     use App\Http\controllers\nameofcontroller at the top
// 4 write Route:get('anypathname',[nameofcontroller::class, 'functionname']);
// open browser at the url type anypathname
// You can addd stuff in the url by adding Route:get('anypathname/{id}',[nameofcontroller::class, 'functionname']);
// pass this id in the parameter of the function as $id and set return as return $id















// Front end development notes.....................................


// html notes.....
// <meta name="keyword" content="python,name">...if anyone searches these keywords he will likely see my website.................................
// <meta name="robot" content="INDEX,FOLLOW">


// <label for="name">Name</label>
// <input type="text" id="name">.....on clicking Name input name tag gets selected. Here
//  in for the value is same as id in input tag
// lable    tag can also be used
// html entities.... ...&lt $gt(add < and > in the browser) &nbsp.(adds space it means non breakable space) &copy(adds @)
// semantic tags...tags which have meaning e.g header,navigation,section,article,aside,footer










// css notes


// write (!important) against the property of an element in css to get it the top most preferrnce

// You can use google fonts

// background-position: top right;....used to give the position to an image on x and y axis in css
                    // #p{
                    //     width:20px;
                    //     height:10px;
                    //     border:solid 2px red;
                    //     background-position:top right;
                    // }
// padding 2px 5px ...first value represents top and bottom, and second value is for right and left.
// use width: property with margin:auto; property 
// when you float an element it gets overflowed from its parent so use in the parent... overflow:auto.. property; 


// display:block (elemnt will take the width of entire viewport)   you can use width property with it. Also use margin: auto for centering the block.
// display:inline (elemnt will take only the required width)...you cannoot use width property here
// inline-block ...(if you want the element to be inline as well as able to set its width ) you can use width property here

// position:absolute.....gives position realtive to parent element without leaving a gap. (use top,bottom,right and left).
// position:realtive.....gives  position realtive to its original position leaving a gap on the viewport.
// position:sticky.... keeps the content sticked at the top of the screen.
// position:fixed....keeps the position fixed anywhere on the screen (use top,bottom,right and left).
// visibility:none.....space will be there and elemet will dissapear
// display:none.....element and its space will disappear.
// z-index:5 stacks elements on top of each other. works with all positions except the default which is static

?>



<!-- flex box tutorial with flex properties -->

<!-- .container {
			height: 544px;
			width: 100%;
			border: 2px solid black;
			display: flex; -->
<!-- /* Initialize the container as a flex box */
            

            /* Flex properties for a flex container */
            

			/* flex-direction: row; (Default value of flex-direction is row) */
			/* flex-direction: column;
            flex-direction: row-reverse;
            flex-direction: column-reverse; */
			/* flex-wrap: wrap; (Default value of flex-direction is no-wrap) */
			/* flex-wrap: wrap-reverse; */
			/* This is a shorthand for flex-direction: and flex-wrap: ;; */
            /* flex-flow: row-reverse wrap; */
            
            /* justify-content will justify the content in horizontal direction */
            
			/* justify-content: center; */
			/* justify-content: space-between; */
			/* justify-content: space-evenly; */
            /* justify-content: space-around; */
            
            /* align-items will align the content in vertical direction */
            
			/* align-items: center; */
			/* align-items: flex-end; */
			/* align-items: flex-start; */
			/* align-items: stretch; */ -->
}

<!-- .item {
			width: 200px;
			height: 200px;
			background-color: tomato;
			border: 2px solid green;
			margin: 10px;
			padding: 3px;
		} -->

<!-- #item-1 {
			/* Flex properties for a flex item */
			/* Higher the order, later it shows up in the container */
			/* order: 2; */
			/* flex-grow: 2;
            flex-shrink: 2; */
		} -->

<!-- #item-2 {
			/* flex-grow: 3;
            flex-shrink: 3 ; */
			flex-basis: 160px;
			/* when flex-direction is set to row flex-basis: will control width */
			/* when flex-direction is set to column flex-basis: will control height */
		} -->

<!-- #item-3 {
			/* flex: 2 2 230px; */
			align-self: flex-start;
			align-self: flex-end;
			align-self: center;

		} -->

<!-- <div class="container">
		<div class="item" id="item-1">First Box</div>
		<div class="item" id="item-2">Second Box</div>
		<div class="item" id="item-3">Third Box</div>
		<!-- <div class="item" id="item-4">Fourth Box</div>
        <div class="item" id="item-5">Fifth Box</div>
        <div class="item" id="item-6">Sixth Box</div> -->













<!-- // selectors in css -->


<!-- /* if p is contained by any li which is contained by div */
    /* div li p{
        color: yellow;
        background-color: green;
        font-weight: bold;
    } */

    /* if p is right inside div then this CSS will be applied */
    /* div > p{
        color: yellow;
        background-color: green;
        font-weight: bold;
    } */

    /* if p is right after div i.e p is the next sibling of div*/
    /* div + p{
        color: white;
        background-color: rgb(238, 137, 137);
    } */ -->

<!-- example is given below -->

<!-- // </style>
// <body>
//     <h1>This is more on selectors</h1>
//     <div class="container">
//         <div class="row">
//             <ul>
//                 <li class="item"><p> this is another paragraph inside li</p></li> 
//                 <li>this will not get affected</li>
//                 <p>this is a para inside ul</p>
//             </ul>
//             <p>This is a paragraph</p>
//         </div>
//         <p>This is another paragraph</p>
//     </div>
//     <p>this is outermost paragraph</p>
// </body>
// </html> -->


<!-- // header::before{
    content:"" keep content as null
    top      keep it 0
    bottom   0 value
    background:url()....an image here
    set the opacity to 0.5
    z-index:-1;
    
    do all these properties in header and you will get an image with text over it

} -->
















<!-- // box shadow property with example given below -->

<!-- .container{
    display: flex;
}
.card{
    padding: 23px 12px;
    margin: 23px 12px;
    /* border: 2px solid red; */
    background-color: burlywood;
    /* box-shadow: offset-x offset-y color; */
    /* box-shadow: offset-x offset-y blur-radius color; */
    /* box-shadow: offset-x offset-y blur-radius spread-radius color; */

    /* box-shadow: 10px 13px green; */
    /* box-shadow: -10px -13px green; */
    /* box-shadow: 7px 5px 10px green;
    box-shadow: -7px -5px 10px green; */
    /* box-shadow: -7px -5px 10px 34px green; */
    /* box-shadow: -7px -5px 10px 34px rgba(71, 172, 172, 0.5); */
    box-shadow: inset 3px 5px green;

    box-shadow: 3px 5px green, 4px 6px red;
}
.card h2{
    /* text-shadow: 3px 4px red; */
    /* text-shadow: 3px 2px 2px white; */
    text-shadow: -3px -2px 2px white;
}
</style>
<body>
    <div class="container">
        <div class="card" id="card-1">
           <h2>This is C++ Course</h2>
           <p>I have started C++ course which does not mean that we will stop this course. We will continue this course to completion. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laudantium, doloremque enim repellat impedit autem nostrum facilis odio omnis optio voluptates beatae mollitia temporibus voluptas consequuntur harum animi totam molestiae labore architecto ratione qui!</p>
        </div>
      -->















<!-- // animations  -->

<!-- // .box {   .box is a class in a div 
        //     background: greenyellow;
        //     border: 2px solid red;
        //     position: relative;
        //     width: 250px;
        //     height: 250px;
        //     animation-name: Afaaq;
        //     animation-duration: 5s;
        //     animation-timing-function: ease-in-out;
        //     /* animation-iteration-count: 4; */
        //     /* animation-delay: 1s;
        //     animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275); */
        // } -->

<!-- // @keyframes Afaaq {



        //     /* from {
        //         width: 250px;
        //     }
        //     to {
        //         width: 700px;
        //     } */


        <!-- either use above one or use this one -->
<!-- //     0% {
        //         top: 0px;
        //         left: 0%;
        //     }
        //     25% {
        //         top: 0px;
        //         left: 200px;
        //     }

        //     50% {
        //         left: 200px;
        //         top: 300px;
        //     }
        //     75% {
        //         top: 300px;
        //         left: 0px;
        //     }
        //     100% {
        //         top: 0px;
        //         left: 0px;
        //     }
        // } -->