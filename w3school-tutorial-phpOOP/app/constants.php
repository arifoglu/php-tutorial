<?php

//connection check 
$conn = new mysqli('db','root','arifoglu','mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

class Goodbye {
  const MESSAGE = "Thanks!";

  public function byebye() {
    echo self::MESSAGE;
  }
}
$goodbye = new Goodbye();
$goodbye->byebye();



?>