<?php

//$_GET
// if(isset($_GET['submit'])){
//   echo $_GET['email'];  
//   echo $_GET['title'];  
//   echo $_GET['ingredients'];  
// }

//$_POST
// if(isset($_POST['submit'])){
//   echo $_POST['email'];  
//   echo $_POST['title'];  
//   echo $_POST['ingredients'];  
// }

///////////////////////////////////////////////////////////////////////////////////////////////   
// we have to use <<<<<<< htmlspecialchars()>>>>>> 
// before send a server to avoid malicious code attacks
// <script>window.location ="https://www.bbc.co.uk"</script> 
///////////////////////////////////////////////////////////////////////////////////////////////

 if(isset($_POST['submit'])){
   

    //check email
   if(empty($_POST['email']))
   {
    echo "an email is required <br>";
   }
   else
   {
    //echo htmlspecialchars($_POST['email']); 
    $email =$_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "EMAIL must be valid";
    } 
   }

   //check title
   if(empty($_POST['title']))
   {
    echo "a title is requiered <br>";
   }
   else
   {
   // echo htmlspecialchars($_POST['title']);  
   $title = $_POST['title'];
   if(!preg_match('/^[a-zA-Z\s]+$/',$title))
   {
    echo "TITLE must be letters ";
   }
   }

   //check ingredients
   if(empty($_POST['ingredients']))
   {
    echo "an ingredient is requiered <br>";
   }
   else
   {
    //echo htmlspecialchars($_POST['ingredients']); 
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients))
    {
     echo "Ingredients must be a comma ";
    } 
   }
   };

 
?>

<!DOCTYPE html>
<html lang="en">

 <?php include('../templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

 <?php include('../templates/footer.php'); ?>
    

</html>