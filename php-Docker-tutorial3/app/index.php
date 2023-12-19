<?php

// connect to database

$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'pizzas') ;

// check connection

if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}

// write query for all pizzas

$sql = "SELECT  title , ingredients , id FROM pizzatest ORDER BY created_at" ;

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 
mysqli_free_result($result);

// close connection 
mysqli_close($conn);

// explode("," , $pizzas[0]['ingredients']);


?>

<!DOCTYPE html>
<html lang="en">


 <?php include('./header.php'); ?>

 <h4 class="center grey-text">Pizzas!</h4>

 <div class="container">
    <div class="row">

        <?php foreach($pizzas as $pizza) : ?>
            
            <div class="col s6 m3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza["title"]);?></h6>
                        <div><?php echo htmlspecialchars($pizza["ingredients"]);?></div>
                        <ul>
                          <?php foreach(explode("," , $pizza["ingredients"]) as $ing ) :?>   
                            <ul>
                                <li><?php echo htmlspecialchars ($ing) ?></li>          
                            </ul>
                          <?php endforeach; ?>   
                        </ul>
                    </div>
                    <div class="card-action right-align">
                         <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> 
        <?php if(count($pizzas) >= 2): ?>
            <p>there are more than 2 pizzas</p>
            <?php else : ?>
            <p>there are less than 2 pizzas</p>
        <?php endif; ?>

    </div>
 </div>

 <?php include('./footer.php'); ?>
    

</html>