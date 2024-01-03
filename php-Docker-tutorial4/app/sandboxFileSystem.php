<?php 

// $quotes =readfile("readme.txt");
// echo $quotes;

$file = 'readme.txt';

if(file_exists($file))
{
    // read a file
    echo "file exist" . readfile($file);

    // copy a file
    copy($file,'readmeCopy.txt');

    // file size
    echo filesize($file);

    // rename file
    rename("readmeCopy.txt" , "test.txt");
}
else
{
    echo "file does not exist";
}




?>