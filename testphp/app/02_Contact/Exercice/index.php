<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP - Contact</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <header>
        <h1>Formulaure de contact</h1>
    </header>

    <main>
        <section>
            <form action="index.php" method="post">
                <div>
                    <input type="radio" name="genre" value="Mr." id="mr"> <label for="mr">Monsieur</label>
                    <input type="radio" name="genre" value="Mme" id="mme"> <label for="mme">Madame</label>
                </div>
                <div>
                    <label for="nom">Nom*</label>
                    <span class="error" title="Vous pouvez indiquer votre prénom et nom dans le même champ.">Veuillez indiquer votre nom</span>
                    <br>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="email">E-mail*</label>
                    <span class="error" title="Le message vous sera également transmis">Veuillez indiquer votre adresse e-mail</span>
                    <span class="error" title="Au format [nom@nomdedomaine.ext]">Veuillez indiquer une adresse valide</span>
                    <br>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="sujet">Sujet*</label>
                    <span class="error" title="Aidez-nous à comprendre la nature de votre requête">Veuillez définir un sujet</span>
                    <br>
                    <select name="sujet" id="sujet">
                        <option value=""></option>
                        <option value="renseignements">Demande de renseignements</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message*</label>
                    <span class="error" title="Sans doute un oubli">Veuillez indiquer un message</span>
                    <br>
                    <textarea name="message" id="message"></textarea>
                </div>
                <div>
                    <input type="checkbox" name="newsletter" id="newsletter">
                    <label for="newsletter">Je souhaite recevoir la newsletter</label>
                </div>
                <div>
                    <input type="submit" value="Envoyer le message">
                </div>

            </form>			
        </section>
    </main>

</div>
    
<footer>
	PHP : Le formulaire de contact
</footer>
    
</body>
</html>