<?php 

//local scope
// function myfunct(){
//     $price = 10;
//     echo $price;
// }
// myfunct();
// // if we define a variable inside of function we cannot use it outside of function just like that:
// echo $price;

//global scope
$name = 'san';
function  sayHi(){
    global $name;
    echo "HI $name";
}
sayHi();
echo "<br>";

function  sayHi2(){
    global $name;
    $name = "dan";
    echo "HI $name";
}
sayHi2();
echo "<br>";

function  sayHi3(&$name){
    $name = "zan";
    echo "HI $name";
}
sayHi3($name);
echo "<br>";

echo $name;
echo "<br>";


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>