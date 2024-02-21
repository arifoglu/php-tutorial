<?php 
// check connection
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'arifoglu');
DEFINE ('DB_HOST', 'arifoglu_mysql');
DEFINE ('DB_NAME', 'students_db');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

?>