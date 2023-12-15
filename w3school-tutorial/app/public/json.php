<?php

/////////////////////////// json_encode
$age = array("peter"=> 12, "can"=>13 ,"ken"=> 14);
print_r($age) ."<br>";

echo json_encode($age) . "<br>";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars) . "<br>";


/////////////////////////// json_decode 
//json_decode function returns an object by default
//function is used to decode a JSON object into a PHP object or an associative array.

$ageJSONformat = '{"peter":12,"can":13,"ken":14}';

var_dump(json_decode($ageJSONformat)) ;

echo  "<br>";

// acces a decoded values
$ageDecoded = json_decode($ageJSONformat);
echo $ageDecoded->peter . "<br>";
echo $ageDecoded->can . "<br>";
echo $ageDecoded->ken . "<br>";

//////////////////////////// looping values decoded
$ageJSONformat2 = '{"peter":12,"can":13,"ken":14}';

$ageDecoded2 = json_decode($ageJSONformat2);

foreach($ageDecoded2 as $key => $value){
    echo $key ."=>". $value ."<br>";
}

?>