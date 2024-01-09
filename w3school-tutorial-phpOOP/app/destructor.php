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

    function __construct($name){
        $this->name = $name;
    }
    function __destruct(){
        echo $this->name ;
    }
}
$apple = new fruit("apple");


?>