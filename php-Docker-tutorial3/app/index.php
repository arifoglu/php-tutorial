<?php

// connect to database

$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'pizzas') ;

// check connection

if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}

// write query for all pizzas

$sql = "SELECT  title,ingredients,id FROM pizzatest" ;

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 
mysqli_free_result($result);

// close connection 
mysqli_close($conn);

print_r($pizzas);


?>





<!DOCTYPE html>
<html lang="en">


 <?php include('./header.php'); ?>
 <?php include('./footer.php'); ?>
    

</html>