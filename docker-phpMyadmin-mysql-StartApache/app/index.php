<?php 
echo "HI"."<br>";

$connect = new mysqli('db','root','arifoglu','mysql');

if($connect)
{
    echo "Connected to mysql
    ";
}

?>