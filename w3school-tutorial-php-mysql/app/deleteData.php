<?php 
echo "Delete DATA"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn){
    die("conection failed : " . mysqli_connect_error());
}

$sql = "DELETE FROM MyGuests WHERE id=3";

if(mysqli_query($conn ,$sql))
{
    echo "deleted is succesfull" ;
}
else
{
    echo "!!!error deleting error!!!" . mysqli_error();
}

mysqli_close($conn);

///////////////////////////////////////////////////////////////
/////////////////////////////////////////MySQLi Object-Oriented
///////////////////////////////////////////////////////////////

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   
// $sql = "DELETE FROM MyGuests WHERE id=5";
// 
// if ($conn->query($sql) === TRUE) 
// {
//   echo "Record deleted successfully";
// } 
// else 
// {
//   echo "Error deleting record: " . $conn->error;
// }
// 
// $conn->close();


?>