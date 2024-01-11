<?php session_start();

if(empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["btn_logout"])){
    header("Location: index.php");
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
                <li><a href="administration.php" checked style="color:red">Administration</a></li>
                <li><a href="index.php">Gestion du site</a></li>
                <li><a href="index.php">Configuration</a></li>
            </ul>
        </aside>
        <section>
                   <p>
                      <strong>Bienvenue ! La page d'administration</strong>  
                   </p>
                   <p>
                       Vos accès ont été validés.
                   </p>
                   <form action="logoutprocess.php" method="post">
                       <p>
                       <input type="submit" name="btn_logout" value="Déconnexion">
                       </p>
                   </form>	
        </section>
    </main>
</div>   
<footer>
	L'authetification d'accès  
</footer>
</body>
</html>