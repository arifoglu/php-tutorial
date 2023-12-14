
<?php
// readfile open and read a file on the server

// echo readfile("../templates/webdictionary.txt");

// echo readfile("./constants.php");

// first line read
// $myfile = fopen("../templates/webdictionary.txt", "r") or die("Unable to open file!");
// echo fgets($myfile);
// fclose($myfile);

/////////// file create and write

// first we open a file and write into it and then we close it
// new.txt file was created
$myfile = fopen("../templates/new.txt","w") ;

$txt = "John";
fwrite($myfile,$txt);

$txt2 = "this file has been written  on the server";
fwrite($myfile,$txt2);

fclose($myfile);

?>