<?php

$fruits = ["apple","mango","kiwi","banana"];
$lengths = array_map(function($item) { return strlen($item);},$fruits);
print_r($lengths);


?>