<?php 

// connection database
$db_user = "root";
$db_pass = "arifoglu";
$db_name = "useraccounts";

$db = new PDO('mysql:host=arifoglu_mysql;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>