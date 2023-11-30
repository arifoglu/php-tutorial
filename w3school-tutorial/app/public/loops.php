<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////LOOPS

///////////////////////////////while loops

$x = 1;
while($x <= 5){
    echo "the number is $x <br>";
    $x++;
}
echo "<br>";

$x = 0;
while($x <= 100){
    echo "the number is $x <br>";
    $x +=10;
}
echo "<br>";

/////////////////////////////// do while loops

$x = 1;
do{
    echo "the number is : $x <br>";
    $x++;
}while ($x <= 5);
echo "<br>";

/////////////////////////////// for loops

for($x = 0 ; $x <= 10 ; $x+=2){
    echo "the number is : $x <br>";
}
echo "<br>";
for($x = 4 ; $x <= 25 ; $x+=4){
    echo "the number is :$x <br>";
}
echo "<br>";
/////////////////////////////// foreach loops
//
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
//For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
//
$colors = array("red","green","blue","yellow");
print_r($colors);
echo "<br>";

foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";

//
$age = array("peter"=>"35", "ben"=>"37","joe"=>"45");
print_r($age);
echo "<br>";

foreach($age as $x =>$val){
    echo "$x = $val<br>";
}
echo "<br>";

/////////////////////////////////////break

for($x = 0 ;$x < 10 ;$x++){
    if($x == 5)
    {
        break;
    }
    echo "the number is : $x <br>";
}
echo "<br>";
/////////////////////////////////////continue

for($x = 0 ;$x < 10 ;$x++){
    if($x == 5)
    {
        continue;
    }
    echo "the number is : $x <br>";
}
echo "<br>";
?>
</body>
</html>

