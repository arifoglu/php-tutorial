<?php

// connect to database

 $conn = mysqli_connect('localhost' , 'arif' , 'test' , 'pizzas') ;

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