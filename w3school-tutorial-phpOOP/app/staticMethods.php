<?php
//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

// 
class greeting {
    public static function welcome(){
        echo "hi";
    }
}
greeting::welcome();

//
class A{
    public static function welcome(){
        echo "hello";
    }
}
class B {
    public function message(){
        A::welcome();
    }
}
$obj= new B();
echo $obj-> message();

echo "<br>";

// 
class domain{
    protected static function getWebsiteName(){
        return "google.com";
    }
}

class domainG extends domain {
    public $websiteName ;
    public function __construct(){
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainG = new domainG;
echo $domainG->websiteName ;

echo "<br>";






?>