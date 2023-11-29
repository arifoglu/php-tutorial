<?php

//////////////////////////// indexed arrays
// create an array =>  []
//1.option
$peopleOne = ['dan','man','san'];
echo $peopleOne[0];
echo "<br>";

//2.option => array()
$peopleTwo = array('yan','can','ban');
echo $peopleTwo[2];
echo "<br>";

// print_r()
$ages = [10,20,30,40];
print_r($ages);
echo "<br>";

// replace 
$ages[1] = 25 ;
print_r($ages);
echo "<br>";

// add 
$ages[] = 50;
print_r($ages);
echo "<br>";

// add2 array_push()
array_push($ages,60);
print_r($ages);
echo "<br>";

echo count($ages);
echo "<br>";

$peopleThree = array_merge($peopleOne,$peopleTwo);
print_r($peopleThree);
echo "<br>";

/////////////////////////// associative arrays (key && value pairs) 
// first one key ,second one value
$persons = ['dan'=>'black','man'=> 'orange','san'=>'yellow'];
echo $persons['dan'];
echo "<br>";
print_r($persons);
echo "<br>";

$persons2 = array('yan'=>'white','can'=> 'green','pan'=>'grey');
echo $persons2['can'];
echo "<br>";
print_r($persons2);
echo "<br>";

echo count($persons2);

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
