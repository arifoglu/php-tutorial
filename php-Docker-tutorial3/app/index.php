<?php

// connect to database

$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'pizzas') ;

// check connection

if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}


?>

<!DOCTYPE html>
<html lang="en">


 <?php include('./header.php'); ?>
 <?php include('./footer.php'); ?>
    

</html>