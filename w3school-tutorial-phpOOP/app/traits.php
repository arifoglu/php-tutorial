<?php
//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

/// trait that can be used in multiple classes
trait message1 {
    public function msg1(){
        echo "OOP!";
    }
}
class Welcome{
    use message1;
}
class Bienvenu{
    use message1;
}
$obj = new Welcome();
$obj->msg1();

$obj1 = new Bienvenu();
$obj1->msg1();




?>