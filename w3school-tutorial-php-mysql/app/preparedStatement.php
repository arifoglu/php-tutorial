<?php 
echo "InsertData"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn)
{
    die("connection failed" . mysqli_connect_error());
}

// prepare
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname,lastname,email) VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

// set parameters
$firstname = "kil";
$lastname = "bil";
$email = "kil.bil@gmail.com";
$stmt->execute();

$firstname = "pil";
$lastname = "mil";
$email = "pil.mil@gmail.com";
$stmt->execute();

echo "new records has done";

$stmt->close();
$conn->close();

?>