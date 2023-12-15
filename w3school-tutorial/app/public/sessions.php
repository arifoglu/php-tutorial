<?php 
// start session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions PHP</title>
</head>
<body>
    <?php 
    // set sessions variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favcar"] = "audi";
    echo "session variables are set";
    ?>

</body>
</html>