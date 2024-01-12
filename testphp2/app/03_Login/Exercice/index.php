<?php session_start();

// connection database
$conn = mysqli_connect('arifoglu_mysql', 'root' ,'arifoglu',"login-page");
if(!$conn){
    echo "connection errror : " .mysqli_connect_error() ; 
}

$email = $password = $answer = "" ;
$errors = array('email'=>'' ,'password'=> '','answer'=> '');

if(isset($_POST["submit"])){
     //echo $_POST["email"];
     //echo $_POST["password"];


    // validation email
    if(empty($_POST["email"]))
    {
        $errors["email"] = "est obligatoire";
    }
    else
    {
        $email = $_POST["email"];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $errors["email"] = "doit être valid";
        }
    }

    // validation password
    if(empty($_POST["password"]))
    {
        $errors["password"] = "est obligatoire";
    }
    else
    {
        $password = $_POST["password"];
    }

    // verify user connection with database system 
    if(!empty($_POST["submit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $query = "SELECT *FROM loginlist WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$query);
    
        $count = mysqli_num_rows($result);

        $row=mysqli_fetch_array($result);
        

        if($count > 0)
        {
            $id=$row["id"];
            $_SESSION["id"] =$id;
            $_SESSION["email"] =$email;

            $answer = "login succesful $email";
            header("Location: admin.php");

        }
        else
        {
            $answer = "login failed";
        }
    }
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
                <li><a href="admin.php">Administration</a></li>
                <li><a href="index.php">Gestion du site</a></li>
                <li><a href="index.php">Configuration</a></li>
            </ul>
        </aside>

        <section>
           <h2>Enregistrez-vous</h2>

            <form action="index.php?login" method="post">
                <p>
                <span class="error" ><?php echo $answer ; ?></span>
                </p>

                <p>
                <label for="email">E-mail</label>
                <span class="error" ><?php echo $errors["email"] ?></span>
                <br>
                <input class="" type="text" name="email" id="email" value="">
                </p>

                <p>
                  <label for="password">Mot de passe</label>
                <span class="error"><?php  echo $errors["password"] ?></span>
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