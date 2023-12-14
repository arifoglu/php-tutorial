<?php 
// cookies
$cookie_name = "user";
$cookie_value = "John Voe";
setcookie($cookie_name,$cookie_value,time()+ (86400*30), "/");
//86400 1 day

?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo $cookie_name . "isn't set";

        }
        else
        {
            echo $cookie_name ;
            echo $cookie_value ;

        }
    // 2 option short hand    
    // $cookieCheck = (!isset($_COOKIE[$cookie_name])) ? $cookie_name : $cookie_value ; 
    // echo $cookieCheck
        ?>
    </body>
</html>