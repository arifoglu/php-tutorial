<?php 
//GET
//if(isset($_GET['submit']))
//{
//    echo $_GET["name"]."<br>"; 
//    echo $_GET["email"];
//}; 
//POST
if(isset($_POST['submit']))
{
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['website']."<br>";
    echo $_POST['comment']."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP</title>
</head>
<body>



<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
Name:    <input type="text" name="name"><br>
E-mail:  <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea rows="5" cols="40" name="comment" ></textarea><br>
Gender:
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="other">Other<br>
          <input type="submit" value="submit" name="submit">
   </form>
</div>
</body>
</html>

