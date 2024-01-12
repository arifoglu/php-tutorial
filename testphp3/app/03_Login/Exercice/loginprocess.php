<?php 
session_start();

// connect to database
$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'login-page') ;

// check connection
if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}


 if(isset($_POST['submit'])){

  // verify user credentials with database
     $email_unsafe = $_POST["email"];
     $pass_unsafe = $_POST["password"];
 
     $email = mysqli_real_escape_string($conn,$email_unsafe);
     $pass = mysqli_real_escape_string($conn,$pass_unsafe);
 
     $query = mysqli_query($conn,"SELECT *FROM loginlist WHERE email='$email' AND password='$pass' ") or die(mysqli_error($conn));
 
     $row= mysqli_fetch_array($query);
 
       $name =$row["email"];
       $counter=mysqli_num_rows($query);
       $id=$row["id"];
 
       if($counter == 0)
       {
         header("Location: index.php");
       }
       else
       {
         $_SESSION["id"] =$id;
         $_SESSION["email"] =$name;

         header("Location: administration.php");
     }
 
 }
 

?>

<?php 