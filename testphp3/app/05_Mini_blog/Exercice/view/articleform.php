<h2>Articles</h2>

<form action="index.php?page=articles&action=" method="post">

    <div>
        <label for="TitreArticle">Titre</label>
        <input id="TitreArticle" type="text" name="TitreArticle" value="">
    </div>

    <div>
        <label for="AuteurArticle">Auteur</label>
        <input id="AuteurArticle" type="text" name="AuteurArticle" value="">
    </div>

    <div>
        <label for="ContenuArticle">Contenu de l'article</label>
        <textarea id="ContenuArticle" name="ContenuArticle"></textarea>
    </div>

    <div>
        <a class="btn" href="index.php">Annuler</a>
        <input type="submit" value="Envoyer">
    </div>

</form>
            