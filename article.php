<?php session_start();
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
<h2>Nouvel article</h2>
<form action="article1.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label font">Titre de l'article</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="titre" placeholder="Titre" />
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Texte :</label>
        <div class="col-sm-5">
            <textarea type="text" class="form-control" name="article" rows="10" cols="50" placeholder="Article"></textarea>
        </div>
    </div>

    <div>
        <div class="col-lg-offset-1"><a>Publier :</a>
            <label for="name" class="control-label font">Oui</label>
            <input  type="radio" name="publier" value="oui" >


            <label for="name" class="control-label font">Non</label>
            <input  type="radio" name="publier" value="non" >
        </div>
    </div>

            <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
    <input type="file" name="image">
    <br /><br />
    <input type="submit" name="ok" value="Envoyer">
</form>

</body>
</html>












