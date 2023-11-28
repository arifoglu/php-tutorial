<?php
 # echo "hello world";
 // echo "hello world";
 /*multiple line comments */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php file</title>
</head>
<body>
<?php
echo "salutem <br>";
ECHO "SALUT <br>";

$text = "hello world <br>";
echo $text;

// after a variable  .  use
$myProg = "PHP";
echo "mygoal is " . $myProg . "learn" . "<br>";

//////////////////////////////////variables scope
//1 situation
$x = 5;
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
   // using  x outside of this function OK
  echo "<p>Variable x outside function is: $x</p>" . "<br>";

//2 situation
$a = 5;
$b = 10;
function myTest2() {
    global $a , $b ;
    $b = $a + $b ;
  }
  myTest2();
  echo $b . "<br>";
//result is 15

//3 situation
$d = 5;
$e = 10;
function myTest3() {
    $GLOBALS['e'] = $GLOBALS['d'] * $GLOBALS['e'];
  }
  myTest3();
  echo $e;
//result is 50

///////////////////////////////////////////////////// echo
//
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This " , "string ", "was ", "made ", "with multiple parameters.<br>";
//
$txt1 = "p";
$txt2 = "h";
$txt3 = "p";
echo $txt1.$txt2.$txt3 ."<br>";

///////////////////////////////////////////////////// print
//
print "<h2>PHP is Good! </h2>";
print "PHP is good <br>";
print "PHP". "is" . "good". "<br>";
//
$as = 12;
$ay = 13;
print $as + $ay ;
print "<br>";

///////////////////////////////////////////////////////data types
//
class Car {
    public $color;
    public $model;
    public function __construct($color ,$model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "my car is a " . $this->color . " " . $this->model ;
    }
}
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br> <br>";

?>
</body>
</html>