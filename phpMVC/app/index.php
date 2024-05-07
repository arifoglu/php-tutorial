<?php 
// check connection
$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'mysql') ;
if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}

require_once './views/init.php' ;

$app = new App ;

?>

<ul>
    <li><a href="home.php">controllers/</a></li>
    <li><a href="App.php">core/</a></li>
    <li><a href="#">models</a></li>
    <li><a href="views">views</a></li>
</ul>