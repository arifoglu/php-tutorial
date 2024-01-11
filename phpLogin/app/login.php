<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP - L'authetification d'accès</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1>L'authentification d'accès</h1>
    </header>  
    <main>
        <aside>
            <ul class="menu">
                <li><a href="admin.php">Administration</a></li>
                <li><a href="index.php">Gestion du site</a></li>
                <li><a href="index.php">Configuration</a></li>
            </ul>
        </aside>

        <section>
           <h2>Enregistrez-vous</h2>
            <form action="admin.php" method="post">
                <p>
                <span class="error" ></span>
                </p>
                <p>
                <label for="email">E-mail</label>
                <span class="error" ></span>
                <br>
                <input class="" type="text" name="email" id="email" value="">
                </p>

                <p>
                  <label for="password">Mot de passe</label>
                <span class="error"></span>
                <br>
                <input class="" type="password" name="password" id="password" value="">
                </p>

                <p>
                <input type="submit" value="OK" name="submit">
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





























<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
<body>

<center>

    <p>Login</p>
<form action="login process.php" method="POST">

    <input type="text" id="user" name="username" placeholder="username"/><br><br>
    <input type="text" id="pass" name="password" placeholder="password"/><br><br>
    <button type="submit" id="btn" name="login" default>login</button>

</form>

</center>

</body>
</html> -->
