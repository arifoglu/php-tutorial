<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////Constants
//define()  can be created inside another block scope.

define("SALUTATION","salut");
echo SALUTATION;
echo "<br>";

//const     cannot be created inside another block scope.
const mycar = "audi";
echo mycar;
echo "<br>";

//define an array
define("cars" , ["bmw","audi","ford","jaguar","renault","ferrari"]);
echo cars[0]; // bmw
echo cars[1]; // audi

echo "<br>"; //array_rand()  pick an item randomly from an array 
echo cars[array_rand(cars)];
echo "<br>";

function mytest(){
    echo cars[5]; // constants can be use inside of the function
};
mytest();
echo "<br>";

//////////////////////////////////////////////////////// Magic Constants
// __DIR__
echo __DIR__;   // /app/public
echo "<br>"; 

//__FILE__
echo __FILE__; // /app/public/constants.php
echo "<br>"; 

//__LINE__
echo __LINE__; // line 48
echo "<br>"; 


?>
</body>
</html>

