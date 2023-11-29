<?php

//////////////////////////// multi-dimensional arrays
 $blogs =[
    ['fan','gan','zan',30],
    ['van','ran','han',40],
    ['kan','lan','nan',50]
 ];
 print_r($blogs);
 echo '<br>';

 print_r($blogs[0]);// first array
 echo '<br>';
 print_r($blogs[0][0]);// first key of first array
 echo '<br>';
///
 $blogs2 =[
    ['title'=>'fan','author'=>'gan','content'=>'zan','ages'=>30],
    ['title'=>'van','author'=>'ran','content'=>'han','ages'=>40],
    ['title'=>'kan','author'=>'lan','content'=>'nan','ages'=>50]
 ];
 echo $blogs2[2]['author'];
 echo '<br>';

 echo count($blogs2);
 echo '<br>';
 
 $blogs2[] = ['title'=>'jan','author'=>'xan','content'=>'poan','ages'=>60];
 print_r($blogs2);
 echo '<br>';

 echo count($blogs2);
 echo '<br>';

 // it takes off last one
 $lastOne = array_pop($blogs2);
 print_r($lastOne);
 echo '<br>';

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
