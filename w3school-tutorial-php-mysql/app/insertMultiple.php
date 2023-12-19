<?php 
echo "InsertData"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn)
{
    die("Connection failed" . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('as', 'lan', 'as.lan@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('kap', 'tan', 'kap.tan@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('pul', 'man', 'pul.man@gmail.com')";

if(mysqli_multi_query($conn,$sql))
{
    echo "new records has done";
}
else
{
    echo "error" .$sql . mysqli_error($conn);
}
mysqli_close($conn);



//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Object-Oriented
//////////////////////////////////////////////////////////////////////

// Check connection
// if ($conn->connect_error) 
// {
//    die("Connection failed: " . $conn->connect_error);
// }
// 
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('John', 'Doe', 'john@example.com');";
//  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('Mary', 'Moe', 'mary@example.com');";
//  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('Julie', 'Dooley', 'julie@example.com')";
// 
// if ($conn->multi_query($sql) === TRUE) 
// {
//     echo "New records created successfully";
// } 
// else
// {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $conn->close();
    
?>