<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>
<body>
    <?php
////////////////////////////////////////////////////////SUPERGLOBALS
///////////////////////////////
// $GLOBALS // $_SERVER // $_REQUEST // $_POST // $_GET // $_FILES // $_ENV // $_COOKIE  // $_SESSION


// $GLOBALS 
// we can acces a variable from outside the function
$x = 15;
$y = 25;
function addition(){
    $GLOBALS['z'] = $GLOBALS ['x'] + $GLOBALS ['y'];
    
};
addition();
echo $z;
echo "<br>";

// $_SERVER 
// we can hold information about headers, paths, and script locations.
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
echo $_SERVER["SCRIPT_NAME"];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";
echo $_SERVER["SERVER_PROTOCOL"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
echo $_SERVER["REQUEST_TIME"];
echo "<br>";


?>
</body>
</html>

