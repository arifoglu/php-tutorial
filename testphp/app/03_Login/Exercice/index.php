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
                <li><a href="index.php">Administration</a></li>
                <li><a href="index.php">Gestion du site</a></li>
                <li><a href="index.php">Configuration</a></li>
            </ul>
        </aside>

        <section>

            <h2>Enregistrez-vous</h2>
            <p>
                Bienvenue ! 
            </p>
            <p>
                Vos accès ont été validés.
            </p>

            <form action="index.php?unlog" method="post">
                <p>
                <input type="submit" value="Déconnexion">
                </p>
            </form>	

            <form action="index.php?login" method="post">

                <p>
                <span class="error" title="Vous pouvez également contacter l'administrateur en cas d'oubli">Le système n'a pas réussi à vous authetifier. Veuillez essayer à nouveau.</span>
                </p>

                <p>
                <label for="email">E-mail</label>
                <span class="error" title="Sans doute un oubli">Veuillez indiquer votre adresse e-mail</span>
                <span class="error" title="Au format [nom@nomdedomaine.ext]">Veuillez indiquer une adresse e-mail valide</span>
                <br>
                <input class="" type="text" name="email" id="email" value="">
                </p>

                <p>
                  <label for="password">Mot de passe</label>
                <span class="error" title="Sans doute un oubli.">Veuillez indiquer votre mot de passe</span>
                <br>
                <input class="" type="password" name="password" id="password" value="">
                </p>

                <p>
                <input type="submit" value="OK">
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