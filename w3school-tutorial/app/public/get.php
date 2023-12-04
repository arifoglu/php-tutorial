<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET PHP</title>
</head>
<body>

 <!-- $_GET  -->
 <!-- $_GET can  collect data sent in the URL -->
 <!-- we can collect data after submitting an HTML form data  with method = "get" -->
 <!-- -->
  

<a href="get.php?subject=PHP&web=W3schools.com">Test</a>
  
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>


</body>
</html>

