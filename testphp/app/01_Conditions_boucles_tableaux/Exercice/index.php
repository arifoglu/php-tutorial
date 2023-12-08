<?php
$days = [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ];
//echo '<pre>', var_dump( $days ), '</pre>';
//echo '<pre>', var_dump( $days[ $theday ] ), '</pre>';

///
// 1.option
// if(isset($_GET['day']))
// {
//     echo $_GET['day'];
// }
// else
// {
//     echo 0;
// }

// 2.option 

$theday = ( isset( $_GET['day'] ) ) ? $_GET['day'] : 0;

$thepage = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 'foreach';
//echo '<pre>', var_dump( $thepage ), '</pre>';


?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP - Bases</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>bases du PHP</h1>
    </header>	
    <main>
        <aside>
        <form method="get">
            <input type="text" placeholder="Recherche d'un jour" name="day" 
            value="<?php echo $theday ; ?>">                                    
            <input type="submit" name="OK" value="OK">
        
          <ul class="menu">
            <li>
                <input type="radio" id="foreach" name="page" value="foreach" >
                <a  href="index.php">Foreach</a></li>
            </li>
            <li>
                <input type="radio" id="for" name="page" value="for" >
                <a  href="index.php">For</a></li>
            <li>
                <input type="radio" id="while" name="page" value="while" >
                <a  href="index.php">While</a></li>
          </ul> 
        </form>
        </aside>
        <section>
           <?php 
               switch( $thepage ){
                   case 'foreach' : 
                   ?>
                         <h2>La boucle foreach</h2>
                         <h3>Table HTML</h3>
                         <table cellpadding="0" cellspacing="0" class="calendrier" width="100%">
                             <?php foreach( $days as $d => $day ){ ?>
                                 <tr>
                                     <th>
                                         <a class="actif" href="index.php?day=<?php echo $d; ?>">
                                             <?php echo $day; ?>
                                         </a>
                                     </th>
                                 </tr>
                             <?php } ?>
                         </table>
                   <?php
                   break;

                   case 'for' :
                   ?>
                         <h2>La boucle for</h2>
                         <h3>Liste HTML</h3>
                         <ul class="calendrier">
                            <?php for($i = 0 ;$i < count($days);$i++){ ?>                        
                                <li>                       
                                       <a class="" href="index.php?day=<?php echo $days[$i];?>">  
                                        <?php echo $days[$i]."<br>";?>
                                       </a>
                                </li>
                            <?php }?>
                        </ul>
                   <?php
                   break;
   
                   case 'while' :
                   ?>
                          <h2>La boucle while</h2>
                          <h3>Paragraphe HTML</h3>
                          <?php 
                          $i = 0;                       
                          while($i < count($days)){?> 
                            <p class="calendrier">
                                 <a class="" href="index.php?day=<?php echo $days[$i];?>">                      
                                     <?php  echo $days[$i] ."<br>";
                                             $i++;  
                                     ?> 
                                 </a>
                            </p>                                                      
                          <?php  } ?>                                                          
                   <?php
                   break;
               }
           ?>
        </section>
	</main>
</div>  
<footer>
	Les bases du PHP
</footer>  
</body>

</html>
<!-- if we want to start while we have to get a  first variable  from array-->
<!-- $i = $_GET("days") -->
<?php 
// 
// $i = $_GET['day'];
// if(isset(C)){
//     echo $_GET['day'];
// }

/*while($x < 10) {
    if ($x == 4) {
        $x++;
        continue;
      }
      echo "The number is: $x <br>";
      $x++;
    }
    while($i == $_GET['day']) this can be run 
    */
?>


