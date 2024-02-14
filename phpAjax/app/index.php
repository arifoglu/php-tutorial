<?php 
include ("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>      
    #comments {
    display: flex;
    flex-direction: column;
    align-items: flex-start; 
    }
    #comments p {
    margin: 0; 
    }
    button {
    align-self: flex-end; 
    margin-top: 10px; 
   }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
    <script>
        $(document).ready(function(){
            var commentCount = 2;
            $("button").click(function(){
              commentCount +=  2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount 
                });
            }) 
        });
    </script>


    <div id="comments">
        <?php
           $sql = "SELECT * FROM comments LIMIT 2";
           $result = mysqli_query($conn,$sql);
           if(mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)){
                echo "<p>";
                echo  $row['author'];
                echo "</br>";
                echo  $row['message'];
                echo "</p>";
             }
           }
           else
           {
            echo "there are no comments";
           }          
        ?>
    </div>
    <button>Show more comments</button>




</body>
</html>
