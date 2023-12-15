<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions </title>
</head>
<body>
    <?php 
    echo "favorite color is :" . $_SESSION["favcolor"] . "<br>";
    echo "favorite car is :" . $_SESSION["favcar"] . "<br>";
    print_r($_SESSION);
    ?>
    <?php 
        // remove session variables
        // session_unset();

        // destroy the session
        // session_destroy();
    ?>
</body>
</html>