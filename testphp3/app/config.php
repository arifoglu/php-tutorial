<?php
// connect to database
$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'mysql');

if(!$conn){
    echo "connection error :" . mysqli_connect_error();
}

?>