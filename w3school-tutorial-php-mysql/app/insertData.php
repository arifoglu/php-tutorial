<?php 
echo "InsertData"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
 if(!$conn)
 {
        die("Connectiion failed" .mysqli_connect_error());
 }  
 
 //create table
$sql = "INSERT INTO MyGuests2 (firstname,lastname,email) VALUES ('IP','man','ipman@gmail.com')";

if(mysqli_query($conn,$sql))
{
    echo "new list has added";
}
else
{
    echo "error " . $sql . "<br>" . mysqli_error($conn);
}

 mysqli_close($conn);

//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Object-Oriented
//////////////////////////////////////////////////////////////////////

// Check connection

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
// 

//insert DATA
//  $sql = "INSERT INTO MyGuests2 (firstname, lastname, email) VALUES ('hi', 'man', 'himan@gmail.com')";
//  
//  if ($conn->query($sql) === TRUE) 
//  {
//    echo "New record created successfully";
//  } 
//  else 
//  {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//  }
//  $conn->close();

 ?>