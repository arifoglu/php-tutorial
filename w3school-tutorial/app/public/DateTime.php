<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateTime PHP</title>
</head>
<body>
    <div class="container">
        <p>
            <?php 
           
              echo "today is" .date("Y/m/d") . "<br>";
              echo "today is" .date("Y.m.d") . "<br>";
              echo "today is" .date("d.m.Y") . "<br>";
              echo  "year : " .date("Y"). "<br>";
              echo  "day : "  .date("l"). "<br>";
              echo  "hour : " .date("h"). "<br>";
              echo  "hour : " .date("i"). "<br>";
              echo  "hour : " .date("sa"). "<br>";
              echo  "hour : " .date("h:i:sa"). "<br>";
            ?>
        </p>
    </div>
</body>
</html>
<?php
