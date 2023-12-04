<?php

//include 2 types of writing: include person.php  === include(person.php)
include('person.php');
echo "include system works";
echo "<br>";

//require 2 types of writing: require person.php  === require(person.php)
require('person.php');
echo "require system works"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php include "person.php" ?>
        <?php require ("person.php") ?>
    </div>
</body>
</html>