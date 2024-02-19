<?php 
include ("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get-post methods</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="mail.php" method="POST">
        <input id="mail-name" type="text" name="name" placeholder="Full name">
        <br>
        <input id="mail-email" type="text" name="email" placeholder="E-mail">
        <br>
        <select id="mail-gender" name="gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <textarea id="mail-message" name="message" placeholder="message"  ></textarea>
        <br>
        <button id="mail-submit" type="submit" name="submit">Send e-mail</button>
        <p class="form-message"></p>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#mail-name").val();
                var name = $("#mail-email").val();
                var name = $("#mail-gender").val();
                var name = $("#mail-message").val();
                var name = $("#mail-submit").val();

                $(".form-message").load("mail.php", {
                    name: name ,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });

            });
        });
    </script>

</body>
</html>


