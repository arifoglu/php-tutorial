<?php

 // connect to database
$conn = mysqli_connect('arifoglu_mysql' , 'root' , 'arifoglu' , 'login-page') ;

// check connection
if(!$conn){
    echo 'connection error :'. mysqli_connect_error();
}

 session_unset();
 session_destroy();

 echo '<meta http-equiv="refresh" content="2;url=index.php">';
 echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
 echo '<span class="itext">Logging out please wait!...</span>';

?>