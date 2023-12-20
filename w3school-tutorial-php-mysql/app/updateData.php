<?php 
echo "Update DATA"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}
$sql = "UPDATE MyGuests SET lastname='lancan' WHERE id=1";

if(mysqli_query($conn,$sql))
{
    echo "Record has done";
}
else
{
    echo "!!!error!!!" . mysqli_error($conn);
}

mysqli_close($conn);

//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Object-Oriented
//////////////////////////////////////////////////////////////////////

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// 
// $sql = "UPDATE MyGuests SET lastname='lan' WHERE id=1";
// 
// if ($conn->query($sql) === TRUE) 
// {
//   echo "Record updated successfully";
// } 
// else 
// {
//   echo "Error updating record: " . $conn->error;
// }
// 
// $conn->close();


?>