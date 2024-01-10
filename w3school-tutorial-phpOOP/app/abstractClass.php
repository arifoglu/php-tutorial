<?php

//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

// parent class
abstract class Car{
    public $name ;
    public function __construct($name){
        $this->name = $name ;
    }
    abstract public function intro() : string;
}

// child classes
class Audi extends Car{
    public function intro() : string {
        return $this->name ;
    }
} 

// create objects from child classes
$audi = new audi("audi");
echo $audi->intro();
echo "<br>" ;

////////////////////examples
abstract class ParentClass{
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name){
        if($name == "John Doe")
        {
            $prefix = "Mr";
        }
        elseif($name == "Jane Doe")
        {
            $prefix = "Mrs";
        }
        else
        {
            $prefix = "";
        }
        return "{$prefix}{$name}";
    }
}
$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");






?>