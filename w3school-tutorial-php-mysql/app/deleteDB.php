<?php 
echo "deleteDB"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');
///////////////////////////////////////////////////////////
///////////////////////////////////////////MySQLi Procedural
///////////////////////////////////////////////////////////

//check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


//// delete database => DROP database
$sql = "DROP DATABASE mydatabase2";

if(!mysqli_query($conn,$sql))
{
    echo "Error deleting database: ". mysqli_error($conn);
}
else 
{
    echo "myDatabase deleted successfully.";
}
mysqli_close($conn);



////////////////////////////////////////////////////////////////
//////////////////////////////////////////MySQLi Object-Oriented
////////////////////////////////////////////////////////////////
//check connection

// if($conn->connect_error)
// {
//     die("!!!!connection failed!!!!" . $conn->connect_error);
// }

/// delete database => DROP DATABASE

//  $sql = "DROP DATABASE mydatabase4";
//  if(!$conn->query($sql) === TRUE)
//  {
//     "Error deleting database: ". $mysqli->error;
//  }
//  else
//  {
//      "!!Database DELETED SUCCESFULLY";
//  }
// $conn->close();


?>