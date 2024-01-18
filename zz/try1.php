<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='newsletter.php' method='post'>
        <div class="stuff">Email <input type="text" name='email'> 
        <button type="submit" name='submit' >Submit</button> <br></div>
        <?php if ($result) {echo $result ; }  ?>
</form>
</body>
</html>