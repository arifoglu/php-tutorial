<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP - Site multilingue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
<div class="container">
    
    <header>
        <h1>Site multilingue</h1>
    </header>

    <main>
        <aside>
            <ul class="menu">
                <li><a class="" href="index.php">Accueil</a></li>
                <li><a class="" href="contact.php">Contact</a></li>
            </ul>
        </aside>

        <section>
    		<div id="langue">
				<a href="index.php">fr</a> | <a href="index.php">en</a>
			</div>
            
            <form>
                <div>
                    <label for="nom">Nom</label>
                    <input id="nom" type="text">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message"></textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer le message">
                </div>
                    
            </form>
        </section>

    </main>
        
</div>
    
<footer>
	 Multilingue
</footer>
        
</body>
</html>