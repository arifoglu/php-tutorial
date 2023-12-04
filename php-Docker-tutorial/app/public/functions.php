<?php 

// function sayHello($name,$city){
//     echo "good morning $name ,from , $city";
// }
// sayHello("dan","rolle");
// echo "<br>";


function formatProduct($product){
    // echo "{$product['name']} costs £ {$product['price']} to buy .<br>";
    return "{$product['name']} costs £ {$product['price']} to buy .<br>";
}
$formatted = formatProduct(['name'=> 'gold star' , 'price'=> 20]);

echo $formatted;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>