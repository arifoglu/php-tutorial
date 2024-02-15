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
</head>
<body>
    <input type="text" name="name">
    <p id="test"></p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <script>
        //Ajax Structure POST method
        $(document).ready(function(){
            $("input").keyup(function(){
                var name = $("input").val();
                $.post("suggestions.php", {
                    suggestion: name,
                },function(data,status){
                    $("#test").html(data);
                });
            });
        });
    </script>

</body>
</html>