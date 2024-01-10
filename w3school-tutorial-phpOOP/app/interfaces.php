<?php
//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

// interface
interface Animal {
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound(){
        echo "meow";
    }    
}
class Dog implements Animal{
    public function makeSound(){
        echo "bark";
    }
}

$animal = new Cat();
$animal->makeSound();



?>