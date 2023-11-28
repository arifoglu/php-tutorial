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







?>
</body>
</html>

