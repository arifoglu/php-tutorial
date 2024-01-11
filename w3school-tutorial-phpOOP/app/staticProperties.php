<?php
//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

// 
class pi {
    public static $value = 3.14;
}

echo pi::$value;
echo "<br>";






?>