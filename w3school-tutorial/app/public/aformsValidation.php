<?php 

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
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
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
        width:600px;
        min-height:800px;
        border:1px solid;
      }
      input,textarea{
        padding:12px;
        margin-left:40px;
        margin-top:35px;
      }
      div.mainContainer{
        display: flex;
      }
      span{
        color:red;
        margin-left:30px;
      }
     label{
      margin-left:30px
     }
     input[type="submit"]{
      margin-left:140px;
      width:196px;
     }  
    </style>
</head>
<body>

<div class="mainContainer">
 <div class="container">
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
     <p><span class="error">* required field</span></p>
     
     <label for="name">Names:</label>
     <input type="text" name="name">
     <span class="error">*<?php echo $nameError.$nameValidation;?></span>
     <br><br>
     
     <label for="email">E-mail: </label>
     <input type="text" name="email">
     <span class="error">*<?php echo $emailError.$emailValidation;?></span><br>
     
     <label for="website">Website:</label> 
     <input type="text" name="website">
     <span class="error">*<?php echo $websiteError.$websiteValidation;?></span><br>
     
     <label for="comment">Comment: </label> 
     <textarea rows="5" cols="20" name="comment" ></textarea><br><br>
     
     <label for="gender">Gender:</label>
       <input type="radio" name="gender" value="female">Female
       <input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="other">Other 
       <span class="error">*<?php echo $genderError;?></span><br>
       <input type="submit" value="submit" name="submit">
  </form>
 </div>
</div>
</body>
</html>

