<?php 

// Objected oriented programming with examples................


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











// constructor

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














// destructor
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
















// protected....if you define a private fn in a class and then you use inheritance, 
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

</body>

</html>