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

<form action="forms.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>
<?php
