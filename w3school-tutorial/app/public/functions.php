<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////Functions
// The real power of PHP comes from its functions.
// PHP has more than 1000 built-in functions

//
function myfunction(){
    echo "Hello World";
};
myfunction();
echo "<br>";

//
function familyName($fname){
    echo "$fname is a solder<br>";
};
familyName("san");
familyName("man");
familyName("tan");
echo "<br>";

//
function familyName2($fname,$year){
    echo "$fname born in $year <br>";
};
familyName2("san","1926");
familyName2("man","1936");
familyName2("tan","1946");
echo "<br>";

// int 
function sum(int $x ,int $y){
    $z = $x + $y ;
    return $z;
};
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo "<br>";

//float
function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2);
echo "<br>";

//int()
function addNumbers2($a,$b){
    return (int)($a + $b);
  }
  echo addNumbers2(1.2, 5.2);
echo "<br>";
?>
</body>
</html>

