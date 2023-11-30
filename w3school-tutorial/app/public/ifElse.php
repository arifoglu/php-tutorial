<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifElse PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////Conditionals

// if 
 $t = date("H"); 
 if ($t < "20"){
     echo "have a good day";
 };
echo "<br>";

// if else
 if ($t < "20")
 {
     echo "have a good day";
 }
 else
 {
     echo "have a good night";
 }
 echo "<br>";

// if elseif
 if ($t < "10") 
  {
    echo "Have a good morning!";
  } 
  elseif ($t < "20") 
  {
    echo "Have a good day!";
  } 
  else 
  {
    echo "Have a good night!";
  }
echo "<br>";

// shorthand if
$a = 5;
if($a < 10) $b = "Hello";
echo $b;
echo "<br>";

// shorthand if => Ternary Operators ? :
$a = 13;
$b = $a < 10 ? "hello" : "bye";
echo $b;
echo "<br>";

// nested if
$a = 13;
if($a > 10)
{
    echo "Above 10";
    if($a > 20)
    {
        echo "and also above 20";
    }
    else
    {
        echo "but not above 20";
    }
}
echo "<br>";

//////////////////////// switch
$favcolor = "red";

 switch($favcolor){
    case "red" :
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    default :
        echo "your favorite color is neither red,blue, nor green!";            
 }


?>
</body>
</html>

