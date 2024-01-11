<?php
include_once( 'config/global.php' );
include_once( 'sources/articles/articles.php' );
include_once( 'sources/commentaires/commentaires.php' );
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>PHP - PHP-MySQL</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <header>
        <?php include( 'header.inc.php' ); ?>
    </header>
    
    <main>
    
        <aside>
            <?php include( 'menu.inc.php' ); ?>
        </aside>

        <section>
            <?php
            switch( $page ){

                case 'home' : include( 'view/home.php' ); break;

                case 'articleform' : include( 'view/articleform.php' ); break;

                default : include( 'view/home.php' ); break;	

            }
            ?>
        </section>

    </main>

</div>
    
<footer>
	<?php include( 'footer.inc.php' ); ?>
</footer>
</body>
</html>