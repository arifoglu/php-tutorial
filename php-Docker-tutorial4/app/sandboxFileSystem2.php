<?php

$file = "readme.txt";

// open a file for reading

$handle = fopen($file,"r");

////// read file
//echo fread($handle , filesize($file));
//echo fread($handle , 35);


////// read a single line
// echo fgets($handle);

////// read a single character
// echo fgetc($handle);

?> 