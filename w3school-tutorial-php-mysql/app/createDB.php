<?php 
echo "CreateDB"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// create database
$sql = "CREATE DATABASE mydatabase";

if(mysqli_query($conn,$sql))
{
    echo "Database created succesfully";
}
else 
{
    echo "!!creating error " . mysqli_error($conn);
}

mysqli_close($conn);



///////////////////////////////////////////////////////////////
/////////////////////////////////////////MySQLi Object-Oriented
///////////////////////////////////////////////////////////////

//check connection
// if($conn->connect_error)
// {
//     die("!!!!connection failed!!!!" . $conn->connect_error);
// }

//Create database
// $sql = "CREATE DATABASE mydatabase";
// if($conn->query($sql) === TRUE)
// {
//     echo "database created succesfully";
// }
// else
// {
//     "!!Database creating error!!!" .$conn->error ;
// }
// $conn->close();

?>