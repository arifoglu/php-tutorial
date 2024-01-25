<?php
$servername = "arifoglu_mysql";
$username = "root";
$password = "arifoglu";
$dbname = "ajax_crud";

// connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}