<?php

$nom = $email = $message = $validation = $sujet = "" ;
$errors = array('email'=> '','nom'=>'','message'=>'', 'sujet'=>'' ,'validation'=>'');

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
            if(!preg_match('/^[a-zA-Z\s]+$/',$nom))
            {
                $errors ['nom'] = "nom doit être valid";
            }
        }
    
        // check email
        if(empty($_POST["email"]))
        {
            $errors["email"] = "email est necessaire";
        }
        else
        {
            $email = $_POST["email"];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $errors["email"] = "email doit être valid";
            }
        }

        //check sujet
        if(!empty($_POST['sujet'])) 
        {
            $sujet = $_POST["sujet"];  
        }
        else 
        {
            $errors ["sujet"] = "sujet doit choisir ";
        }
 

        // check message
        if(empty($_POST["message"]))
        {
            $errors ["message"] = "message est necessaire";
        }
        else
        {
            $message = $_POST["message"];
        }


        // chekbox newsletter
        if(!empty($_POST["newsletter"]))
        {
            $newsletter = $_POST["newsletter"] ;
        }

    

        if(array_filter($errors))
        {
            $errors ["validation"] =  "error en form";
        }
        else
        {
            $errors ["validation"] = "form est valid";
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
                    <input type="radio" name="genre" value="Mr." id="mr" checked > <label for="mr">Monsieur</label>
                    <input type="radio" name="genre" value="Mme" id="mme"> <label for="mme">Madame</label>
                </div>
                <div>
                    <label for="nom">Nom*</label>
                    <span class="error"><?php echo $errors['nom'];?></span>
                    <br>
                    <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($nom) ?>">                   
                </div>
                <div>
                    <label for="email">E-mail*</label>
                    <span class="error"><?php echo $errors['email'] ;?></span>
                    <br>
                    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email) ?>">
                </div>
                <div>
                    <label for="sujet">Sujet*</label>
                    <span class="error"><?php echo $errors['sujet'] ; ?></span>
                    <br>
                    <select name="sujet" id="sujet">
                            <option value=""></option>
                            <option value="renseignements" <?php echo ( $sujet === 'renseignements' ) ? 'selected' : ''; ?>>Demande de renseignements</option>
                            <option value="autre"<?php echo ( $sujet === 'autre' ) ? ' selected' : ''; ?>>Autre</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message*</label>
                    <span class="error"><?php echo $errors['message'];?></span>
                    <br>
                    <textarea name="message" id="message" value="<?php echo htmlspecialchars($message); ?>"></textarea>
                </div>
                <div>
                    <input type="checkbox" name="newsletter" id="newsletter">
                    <label for="newsletter">Je souhaite recevoir la newsletter</label>
                </div>
                <div>
                    <input type="submit" name="submit" value="Envoyer le message">
                    <span class="error"><?php echo $errors['validation'] ;?></span>
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