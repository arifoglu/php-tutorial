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

$email = $title = $ingredients = "";

$errors = array('email'=> '','title'=>'','ingredients'=>'');


 if(isset($_POST['submit'])){
   
    //check email
   if(empty($_POST['email']))
   {
    $errors ['email'] = "An email is required <br>";
   }
   else
   {
    //echo htmlspecialchars($_POST['email']); 
    $email =$_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
       // echo "EMAIL must be valid";
    $errors ['email'] = "EMAIL must be valid";
    } 
   }

   //check title
   if(empty($_POST['title']))
   {
    $errors ['title'] = "A title is requiered <br>";
   }
   else
   {
   // echo htmlspecialchars($_POST['title']);  
   $title = $_POST['title'];
   if(!preg_match('/^[a-zA-Z\s]+$/',$title))
   {
   // echo "TITLE must be letters ";
    $errors ['title'] = "TITLE must be valid";

   }
   }

   //check ingredients
   if(empty($_POST['ingredients']))
   {
    $errors ['ingredients'] = "An ingredient is requiered <br>";
   }
   else
   {
    //echo htmlspecialchars($_POST['ingredients']); 
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients))
    {
    // echo "Ingredients must be a comma ";
     $errors ['ingredients '] = "Ingredients must be a comma ";
    
    } 
   }

   if(array_filter($errors))
   {
    // echo "error in the form";
   }
   else
   {
    //echo "form is valid";
    header('Location: index.php');
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
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email'] ; ?></div>

        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title'] ; ?></div>

        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

 <?php include('../templates/footer.php'); ?>
    

</html>