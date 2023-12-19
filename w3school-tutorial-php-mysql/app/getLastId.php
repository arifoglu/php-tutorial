<?php 
echo "Get Last ID"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn)
{
    die("connection failed :" . mysqli_connect_error());
}

 
$sql = "INSERT INTO Myguests2 (firstname, lastname, email)
VALUES ('tan', 'san', 'tan.san@gmail.com')" ;

if(mysqli_query($conn,$sql))
{
    $last_id = mysqli_insert_id($conn);
    echo "last id is :" . $last_id ;
}
else
{
    echo "error : $sql " ."<br>" . mysqli_error($conn);
}

mysqli_close($conn);


///////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Object-Oriented
//////////////////////////////////////////////////////////////////////

// Check connection

// if($conn->connect_error){
//     die("connection failed : " . $conn->connect_error);
// };

//
// $sql = "INSERT INTO MyGuests2 (firstname, lastname, email)
// VALUES ('han', 'fan', 'han.fan@gmail.com')";
// 
// if($conn->query($sql) === TRUE)
// {
//     $last_id = $conn->insert_id;
//     echo "last ID is " . $last_id ;
// }
// else
// {
//     echo "error :" .$sql . $conn->error ;
// }
// 
// $conn->close();


?>