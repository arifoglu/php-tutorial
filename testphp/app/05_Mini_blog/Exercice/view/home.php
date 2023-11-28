<h2>Articles <span><a class="btn" href="index.php?page=articleform">Ajouter un article</a></span></h2>

<div class="article">

    <h3>
    <a href="index.php?page=articleform&article=">Titre de l'article</a>
    <span><a class="btn" href="index.php?page=articles&action=delete&item=">supprimer</a></span>
    </h3>

    <p><em>Date - Nom de l'auteur</em></p>
    <p>Contenu de l'article</p>	


    <fieldset>
        <legend> Commentaires </legend>

            <p>
            <a href="index.php?page=commentaires&action=delete&item="><img src="images/cross.png"></a>
            <strong>Pseudo </strong>Commentaire
            </p>

        <form action="index.php?page=commentaires&action=insert" method="post">

            <div>
                <label for="PseudoCommentaire">Pseudo</label>
                <input id="PseudoCommentaire" type="text" name="PseudoCommentaire" value="">
            </div>

            <div>
                <label for="TexteCommentaire">Commentaire</label>
                <textarea id="TexteCommentaire" name="TexteCommentaire"></textarea>
            </div>


            <div>
                <input type="submit" value="Envoyer le commentaire">
            </div>

        </form>
    </fieldset>

</div>