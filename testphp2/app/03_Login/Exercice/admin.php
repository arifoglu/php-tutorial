<?php session_start();

if(isset($_POST["btn_logout"])){
    $answer = "logout succesful" ;
    session_unset();
    session_destroy();
}

?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP - L'authetification d'accès</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>L'authetification d'accès</h1>
    </header>
    
    <main>
        <aside>
            <ul class="menu">
                <li><a href="admin.php" style="color:red">Administration</a></li>
                <li><a href="index.php">Gestion du site</a></li>
                <li><a href="index.php">Configuration</a></li>
            </ul>
        </aside>

        <section>
            <?php if( isset( $_SESSION["email"] ) ){ ?>
   
                   <form action="index.php?unlog" method="post">
                       <p>
                       <input type="submit" name="btn_logout" value="Déconnexion">
                       </p>
                   </form>

            <?php }else{ ?>

                <p>
                       Bienvenue ! La page d'admin.
                   </p>
                   <p>
                       Vos accès ont été validés.
                   </p>
                   <form action="index.php?unlog" method="post">
                       <p>
                       <input type="submit" name="btn_logout" value="Déconnexion">
                       </p>
                   </form>

            <?php } ?>
        </section>
    </main>

</div>
    
<footer>
	L'authetification d'accès !!! 
</footer>
</body>
</html>