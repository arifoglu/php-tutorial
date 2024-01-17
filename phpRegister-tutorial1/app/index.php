<?php 
// Object oriented style
// connection database
$mysqli = new mysqli('arifoglu_mysql', 'root' ,'arifoglu',"login_db");

if($mysqli->connect_errno){
    echo "connection errror : " . $mysqli->connect_error ;
    exit(); 
}

?>