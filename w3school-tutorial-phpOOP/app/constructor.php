<?php

$conn = new mysqli('db','root','arifoglu','mysql');

if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error );
}
echo "connected succesfully!";
echo "<br>" ;

// example1
class fruit{
    public $name;
    public $color;

    function __construct($name){
        $this->name = $name ;
    }
    function get_name(){
        return $this->name;
    }
}
$apple = new fruit("Apple");

echo $apple->get_name();

echo "<br>";

// example1
class Car{
    public $name;
    public $model;

    function __construct( $name, $model){
        $this->name = $name;
        $this->model = $model;
    }
    function get_name(){
        return $this->name;
    }
    function get_model(){
        return $this->model;
    }
}

$audi = new Car("audi","spor");

echo $audi->get_name();
echo "<br>";
echo $audi->get_model();


?>