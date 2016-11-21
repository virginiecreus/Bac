<?php
include 'config.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2 class="titre">Nouvel article</h2>

<br>

<form action="article1.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label font">Titre de l'article :</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="titre" placeholder="Titre" />
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Texte :</label>
        <div class="col-sm-5">
            <textarea type="text" class="form-control" name="article" rows="10" cols="50" placeholder="Article"></textarea>
        </div>
    </div>

    <p><strong>Publier :</strong>
        <label for="name" class="control-label font">Oui</label>
        <input  type="radio" name="publier" value="oui" >


        <label for="name" class="control-label font">Non</label>
        <input  type="radio" name="publier" value="non"></p>



    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
    <div class="col-xs-offset-2 col-md-offset-3">
    <input type="file" name="image">
    </div>
    <br /><br />

    <input  class="button" type="submit" name="ok" value="Envoyer">
</form>

</body>
</html>












