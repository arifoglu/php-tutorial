<?php

$conn = new mysqli('db','root','arifoglu','mysql');

if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error );
}
echo "connected succesfully!";
echo "<br>" ;

//classes 
//////////////////////////// eXample1
class Fruit{
    //Properties
    public $name;
    public $color;

    //Methods
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

//objects
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name(' Apple ');
$banana->set_name(' Banana ');

$apple->set_color(' red ');
$banana->set_color(' yellow ');

echo $apple->get_name();
echo $apple->get_color();
echo "<br>" ;
echo $banana->get_name();
echo $banana->get_color();
echo "<br>" ;

//////////////////////////// eXample2

//class
class Vegetables{
    public $genre;
    public $session;

    function set_genre($genre){
        $this->genre = $genre ;
    }
    function get_genre(){
        return $this->genre;
    }  
    
    function set_session($session){
        $this->session = $session;
    }
    function get_session(){
        return $this->session;
    }

}

// objects
$tomate = new Vegetables();

$tomate->set_genre("tomato");

echo $tomate->get_genre();
echo "<br>";


$potato = new Vegetables();

$potato->set_session("summer");

echo $potato->get_session();
echo "<br>";


//////////////////////////// eXample3
//classes
class Car{
    public $model;

    function set_model($model){
        $this->model = $model;
    }
    function get_model(){
        return $this->model;
    }
}
//objects
$suv = new Car();

$suv->set_model("suv");

echo $suv->get_model();

echo "<br>";

//////////////////////////// eXample4
class Clothes{
    public $price;

    function set_price($price){
        $this->price = $price ;
    }
    function get_price(){
        return $this->price;
    }

}
$tshirt = new Clothes();

$tshirt->set_price("expensive");

echo $tshirt->get_price();

echo "<br>";

//////////////////////////////// instanceof() if an object belongs to a specific class:

var_dump($tshirt instanceof Clothes); //=>   true 

var_dump($tshirt instanceof Car);     //=>   false

echo "<br>";

////////////////////////////////  eXample5

class Computer{
    public $laptop;

    function set_laptop($laptop){
        $this->laptop = $laptop ;
    }
    function get_laptop(){
        return $this->laptop ;
    }
}
$apple = new Computer();

$apple->set_laptop("apple");

echo $apple->get_laptop();

echo "<br>";

var_dump($apple instanceof Computer);


?>