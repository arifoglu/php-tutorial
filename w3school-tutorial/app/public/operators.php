<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////Operators

/////////////////////////////Arithmetic Operators 
//+ , - , * , / 

$x = 5;
$y = 4;
echo  $x + $y ," ",$x - $y ," ", $x * $y ," ",$x / $y ,"<br>"; 
echo $x ** $y;
echo "<br>";

///////////////////////////Assignement Operators
// = , += , -= , *= , /= , %= 

$a = 10;
echo $a ,"<br>";
$a += 5;
echo $a  ,"<br>"; // 15
$a -= 5;
echo $a ,"<br>";  // 10
$a *= 5;
echo $a ,"<br>";  // 50
$a /= 5;
echo $a ,"<br>";  // 10
$a %= 5;
echo $a ,"<br>";  // 0

///////////////////////////Comparison Operators
// == , === , != , <> , > < , >= <= ,

// == equal
$a = 10;
$b = "10";
var_dump ($a == $b); // true
echo "<br>";

// === identical
var_dump ($a === $b); // false
echo "<br>";

// != not equal
var_dump ($a != $b); // false ,because a == b,
echo "<br>";

// <> not equal
var_dump ($a <> $b); // false ,because a == b,
echo "<br>";

// > greater than ,< less than
$c = 8;
$d = 6;
var_dump ($c > $d); // true  ,because c > d,
echo "<br>";
var_dump ($c < $d); // false ,because c < d,
echo "<br>";

// >= greater than or equal , <= less than or equal
$e = 5;
$f = 5;
var_dump ($e >= $f); // true  ,because e >= f,
echo "<br>";
var_dump ($e <= $f); // true ,because e <= f,
echo "<br>";

///////////////////////////Increment /Decreament Operators
// ++ , -- , 
$v = 10;  
echo ++$v; // 11
echo "<br>";
// --
$w = 10;  
echo --$w; // 9
echo "<br>";

/////////////////////////////Logical Operators
// and , or , xor , && , || , !

//and
$k = 100 ;
$l = 50;
if ($k == 100 and $l == 50){
    echo "hi and";
}
echo "<br>";

// or
if ($k == 100 or $l == 80){
    echo "hi or";
}
echo "<br>";

// xor => True if either $x or $y is true, but not both
if ($k == 100 xor $l == 80){
    echo "hi xor";
}
echo "<br>";

// && 
if ($k == 100 && $l == 50){
    echo "hi &&";
}
echo "<br>";

// || 
if ($k == 100 || $l == 40){
    echo "hi ||";
}
echo "<br>";

// !== 
if ($k !== 90 ){
    echo "hi !==";
}
echo "<br>";

/////////////////////////////String Operators
// . .=

// .   concatenation
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";

// .=  appends
$txt3 = "Hello";
$txt4 = " world!";
$txt3 .= $txt4;
echo $txt3;
echo "<br>";

/////////////////////////////Array Operators
// + , ==  , === , != , <> , !==
// + 
$p = array("a" => "red","b" => "green");
$o = array("c" => "blue","d" => "yellow");
print_r($p + $o) ;// union of $p and $o
echo "<br>";

// == 
var_dump($p == $o); // false
echo "<br>";

// === 
var_dump($p === $o); // false
echo "<br>";

// != 
var_dump($p !== $o); // true
echo "<br>";

// <> 
var_dump($p <> $o); // true
echo "<br>";

// !== 
var_dump($p !== $o); // true
echo "<br>";

/////////////////////////////Conditional Assignement Operators
// ?:
echo $status = (empty($user))? "anonymous" : "logged in";
echo "<br>";

$user = "SAN";
echo $status =(empty($user))? "anonymous" : "logged in";
echo "<br>";

// ??
echo $user1 = $_GET["user1"] ?? "anonyms";
echo "<br>";

echo $color = $color ?? "red";





?>
</body>
</html>

