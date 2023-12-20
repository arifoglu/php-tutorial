<?php 
echo "Where"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}

$sql = "SELECT id ,firstname ,lastname FROM MyGuests WHERE lastname='Moe'";

$result = mysqli_query($conn,$sql) ;

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
else
{
    "0 results";
}

mysqli_close($conn);


?>