<?php 
echo "Select Data"."<br>";

$conn = new mysqli('db','root','arifoglu','mysql');

/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Procedural
/////////////////////////////////////////////////////////////////

//check connection
 if(!$conn)
 {
     die("connection failed :" .mysqli_connect_error());
 }
 
 $sql = "SELECT id ,firstname,lastname FROM MyGuests";
 $result = mysqli_query($conn,$sql);
 
 if(mysqli_num_rows($result) > 0)
 {
     while($row = mysqli_fetch_assoc($result)){
         echo "id : " . $row["id"] . " -firstname :". $row["firstname"]. " -lastname :".$row["lastname"] ."<br>" ;
     }
 }
 else
 {
     echo "no results";
 }
 
 mysqli_close($conn);


//////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////MySQLi Object-Oriented
//////////////////////////////////////////////////////////////////////

// Check connection
// if($conn->connect_error){
//     die("connnection failed " . $conn->connect_error);
// }
// 
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);
// 
// if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }
// $conn->close();


?>