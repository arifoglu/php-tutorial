<?php 
// connection database
$conn = mysqli_connect('arifoglu_mysql', 'root' ,'arifoglu',"login-page");
if(!$conn){
    echo "connection errror : " .mysqli_connect_error() ; 
}
?>