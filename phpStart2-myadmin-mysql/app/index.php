<?php 
echo "HI"."<br>";

$connect = new mysqli('mysql_db','root','root','mysql');

if($connect)
{
    echo "Connected ";
}

?>