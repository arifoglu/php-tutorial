<?php

/////////////////////////// LOOPS
//for
$persons = ['dan','man','san'];

for($i = 0 ;$i < count($persons);$i++){
    echo $persons[$i]. "<br>";
}
echo "<br>";

/////////////////////////////////////////////////
//////////////////////////////////////////foreach
foreach($persons as $person){
    echo $person . "<br>" ;
};
echo "<br>";
///
$days = ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];

foreach($days as $day){
    echo $day . "<br>" ;
};
echo "<br>";

//
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];
foreach($products as $product){
    echo $product['name']. " - ". $product ['price'];
    echo "<br>";
};
///////////////////////////////////////////////while loops
while($i < count($products)){
    echo $products[$i]['name'];
    echo "<br>";
    $i++;
}
echo "<br>";






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
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) {  ?>

            <!-- we are inside the loop -->
            <!-- this area not php tags -->
            <!-- this area html output -->
            
            <h3><?php echo $product['name'] ?></h3> 
            <p><?php echo $product['price'] ?></p>

        <?php } ?>
    </ul>

</body>
</html>
