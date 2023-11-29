<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes PHP</title>
</head>
<body>
    <?php
    //////////////////////////////////////////////////////// Strings
//strlen() => string length
echo strlen("hello world"); //result 11
echo "<br>";

//str_word_count() => count words
echo str_word_count("hello world");//result 2
echo "<br>";

//strrev() => reverse string
echo strrev("Hello");//result olleH 
echo "<br>";

//strpos() => search text within the string.
echo strpos("Hello world","world");//result 6
echo "<br>";

//str_replace() => replace some characters 
echo str_replace("Hello","hi", "Hello world");//result Hi world
echo "<br>";

////////////////////////////////////////////////////////// Numbers
//is_int() =>if check that be integer
$x = 2345;
var_dump(is_int($x)); // true
$y = 23.45;
var_dump(is_int($y)); // false

//is_finite && is_infinite // var_dump works instead of them
$x1 = 1.9e411;
var_dump($x1); // float(INF)
echo "<br>";

////////////////////////////////////////////////////////// Numbers
//
$q = 3456;
var_dump(is_numeric($q)); //true
echo "<br>";

$q1 = "3456"; 
var_dump(is_numeric($q1));//true
echo "<br> <br>";

////////////////////////////////////////////////////////////Math
//pi()
echo pi();
echo "<br>";

//min() , max()
echo min(0,10,20,30,-30,40);
echo "<br>";

echo max(0,10,20,30,-30,40);
echo "<br>";

//abs() 
echo abs(-5.67);
echo "<br>";

//sqrt() 
echo sqrt(64);
echo "<br>";

//round() 
echo round(0.6);
echo "<br>";
echo round(0.49);
echo "<br>";

//rand() 
echo rand(0,5);
echo "<br>";



?>
</body>
</html>

