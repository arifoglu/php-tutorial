<?php 
echo "CreateTable"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
 
 //create table
 $sql = "CREATE TABLE MyGuests 
    (
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstname VARCHAR(30) NOT NULL,
     lastname VARCHAR(30) NOT NULL,
     email VARCHAR(50),
     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     )";
 if(mysqli_query($conn,$sql))
 {
     echo "table Myguests created succesfully";
 }
 else
 {
     echo "table creating table :" .mysqli_error($conn);
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

// create table
// $sql = "CREATE TABLE MyGuests2 (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
//     
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests2 created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
//     
//     $conn->close();
// 
// 
// 
?>