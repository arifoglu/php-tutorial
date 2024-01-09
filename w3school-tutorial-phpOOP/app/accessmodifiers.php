<?php

//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

class fruit{
    public $name;
    protected $color;
    private $weight;
}

$mango = new fruit();
echo $mango->name = "mango";

echo $mango->color = "red"; // error

echo $mango->weight = 15 ; // error



?>