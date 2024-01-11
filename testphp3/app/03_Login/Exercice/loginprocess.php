<?php 
session_start();

// connect to database
$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'login-page') ;

// check connection
if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}


 if(isset($_POST['submit'])){

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
         echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
         document.location='index.php'</script>";
       }
       else
       {
         $_SESSION["id"] =$id;
         $_SESSION["email"] =$name;
         
         echo "<script type='text/javascript'>document.location='administration.php'</script>";
     }
 
 }
 

?>

<?php 