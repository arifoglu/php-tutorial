<?php

//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

class fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name ;
        $this->color = $color;
    }
    public function intro(){
        echo $this->name . " " . $this->color ;

    }
}

class Bananas extends fruit{
    public function message(){
        echo "this fruit is : " ;
    }
}

$banana = new Bananas(" Banana","yellow");
$banana->message();
$banana->intro();
echo "<br>" ;


?>