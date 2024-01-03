<?php

$nom = $email = $message = "" ;
$errors = array('email'=> '','nom'=>'','message'=>'');

if(isset($_POST["submit"])){

    // echo $_POST["nom"];
    // echo $_POST["email"];
    // echo $_POST["message"];

    // check nom
    if(empty($_POST["nom"]))
    {
        $errors ["nom"] = "nom est necessaire";
    }
    else
    {
        $nom = $_POST["nom"] ;
    }

    // check email
    if(empty($_POST["email"]))
    {
        $errors["email"] = "email est necessaire";
    }
    else
    {
        $email = $_POST["email"];
    }


}

?>


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
            <form action="index.php" method="POST">
                <div>
                    <input type="radio" name="genre" value="Mr." id="mr"> <label for="mr">Monsieur</label>
                    <input type="radio" name="genre" value="Mme" id="mme"> <label for="mme">Madame</label>
                </div>
                <div>
                    <label for="nom">Nom*</label>
                    <span class="error"><?php echo $errors['nom'];?></span>

                    <br>
                    <input type="text" name="nom" id="nom">
                    
                    
                </div>
                <div>
                    <label for="email">E-mail*</label>
                    <span class="error"><?php echo $errors['email'] ;?></span>
                    <span class="error" title="Au format [nom@nomdedomaine.ext]">Veuillez indiquer une adresse valide</span>
                    <br>
                    <input type="text" name="email" id="email">
                    <span class="error"> </span>
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
                    <input type="submit" name="submit" value="Envoyer le message">
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