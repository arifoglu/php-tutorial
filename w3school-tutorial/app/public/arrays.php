<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////Arrays 
//////////////////////////////////////indexed arrays
//1)create an array 
$cars = array ("volvo","bmw","toyota");
echo $cars[0]."<br>".$cars[1]."<br>".$cars[2];
echo "<br>";

//count()
echo "this array count is " . count($cars);
echo "<br>";

//2)create an array
$cars2 = array();
$cars2[0] = "ferrari";
$cars2[1] = "audi";
$cars2[2] = "nissan";
print_r($cars2);
echo "<br>";

for($x = 0; $x < count($cars2);$x++){
    echo $cars[$x];
    echo "<br>";
}

//////////////////////////////////////associative arrays
//
$ages = array("peter"=>"35","helen"=>"25","galen"=>"55");
echo $ages["peter"];
echo "<br>";

foreach($ages as $x=>$x_value){ // <<<$x>>> is key ----- <<<$x_value>>> is value
    echo $x ." ".$x_value ."<br>" ;
}

//////////////////////////////////////multidimensional arrays
//
$cars3 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars3[0][0]."<br>";
echo $cars3[1][0]."<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars3[$row][$col]."</li>";
    }
    echo "</ul>";
  }
echo "<br>";

//////////////////////////////////////sorting arrays
//sort() sort arrays in ascending order
$cars4 = array("volvo","bmw","toyota");
sort($cars4);
print_r($cars4);
echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);
echo "<br>";

//rsort() - sort arrays in descending order
$cars5 = array("volvo","bmw","toyota");
rsort($cars5);
print_r($cars5);
echo "<br>";

//asort() -Sort Array (Ascending Order), According to Value 
$ageN = array("Peter"=>"35", "Ben"=>"47", "Joe"=>"43");
asort($ageN);
print_r($ageN);
echo "<br>";

//ksort() -Sort Array (Ascending Order), According to Key - ksort() 
$ageNs = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($ageNs);
print_r($ageNs);
echo "<br>";


?>
</body>
</html>

