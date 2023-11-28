<?php

$stringOne = "my email is ";
$stringTwo = "arifoglu@gmail.com";

echo $stringOne.$stringTwo;
echo "<br> <br>" ;

$name = "Mango";
// echo "Hi " . $name ;

// use "" for that
echo "hi $name";
echo "<br> <br>" ;

// " '' "
echo 'the mans say "oooops!"';
echo "<br> <br>" ;
// ' " " '
echo "'the mans say 'oooops!'";
echo "<br> <br>" ;
// " \" \" "
echo "the mans say \"oooops\" ";
echo "<br> <br>" ;

//find a something
echo $name[1]; // result a
echo "<br> <br>" ;

//strlen => length of the array
echo strlen($name) ;
echo "<br> <br>" ;

//strtoupper => uppercase
echo strtoupper($name) ;
echo "<br> <br>" ;

//strtolower => lowercase
echo strtolower($name) ;
echo "<br> <br>" ;

//str_replace => to replace somethings
echo str_replace("M" , "J"  ,$name) ;
echo "<br> <br>" ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILE</title>
</head>
<body>    

</body>
</html>
