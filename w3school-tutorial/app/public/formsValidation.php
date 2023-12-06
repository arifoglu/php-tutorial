<?php 
//GET
//if(isset($_GET['submit']))
//{
//    echo $_GET["name"]."<br>"; 
//    echo $_GET["email"];
//}; 
//POST
// if(isset($_POST['submit']))
// {
//     echo $_POST['name']."<br>";
//     echo $_POST['email']."<br>";
//     echo $_POST['website']."<br>";
//     echo $_POST['comment']."<br>";
// }
$nameError = "";
$nameValidation ="";
$emailError = "";
$emailValidation = "";
$websiteError = "";
$websiteValidation = "";
$genderError = "" ;



if(isset($_POST['submit'])){
  if(empty($_POST['name']))
  {
    $nameError = "name is required <br>";
  }
  else
  {
    $name = $_POST['name'];
    if(!preg_match('/^[a-zA-Z\s]+$/',$name))
    {
      $nameValidation = "name must be letter <br>"; 
    }
    
  }
  //check email
  if(empty($_POST['email']))
  {
    $emailError = "email is required <br>";
  }
  else
  {
    $email = $_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $emailValidation = "email must be valid <br>"; 
    }
  }
  //check website
  if(empty($_POST['website']))
  {
    $websiteError = "website is required <br>";
  }
  else
  {
    $website = $_POST['website'];
    if(!filter_var($website,FILTER_VALIDATE_URL))
    {
      $websiteValidation = "website must be valid <br>"; 
    }
  }
  //check gender
  if(empty($_POST['gender']))
  {
    $genderError = "gender is required <br>";
  }
  else
  {
    $gender = $_POST['gender'];
  }
  
  $persons =
  "<div class='bottom'>
      <ul>
        <li>$name</li>
        <li>$email</li>
        <li>$website</li>
        <li>$gender</li>
        </ul>
   </div>";
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP</title>
    <style>
      .container{
        margin:auto;
        width:400px;
        height:400px;
        border:1px solid;
      }
      input,textarea{
        padding:10px;
        margin-left:10px;
      }
      div.mainContainer{
        display: flex;
      }
      span{
        color:red;
      }
     
    </style>
</head>
<body>

<div class="mainContainer">
<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <p><span class="error">* required field</span></p>
Name:    <input type="text" name="name"><span class="error">*<?php echo $nameError.$nameValidation;?></span>
<br><br>
E-mail:  <input type="text" name="email"><span class="error">*<?php echo $emailError.$emailValidation;?></span><br>
Website: <input type="text" name="website"><span class="error">*<?php echo $websiteError.$websiteValidation;?></span><br>
Comment: <textarea rows="5" cols="20" name="comment" ></textarea><br>
Gender:<br>
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="other">Other <span class="error">*<?php echo $genderError;?></span><br>
          <input type="submit" value="submit" name="submit">
   </form>
</div>
</div>
<div class="bottom">
  <?php 
    if(isset($_POST['submit'])){echo $persons; }   
  ?>
</div>
</body>
</html>

