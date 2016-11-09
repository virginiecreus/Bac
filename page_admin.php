<?php session_start();
include 'menu.php';
include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="article.php" target="_blank"><img src="img/ajout_article.jpeg"/></a><br>
                <a>Créer un article</a>
            </div>
            <div class="col-md-4">
                <a href="modifier_article.php" target="_blank"><img src="img/modifier_article.jpg"/></a><br>
                <a>Modifier un article</a>
            </div>
            <div class="col-md-4">
                <a href="supprimer_article.php" target="_blank"><img src="img/supprimer_article.jpeg"/></a><br>
                <a>Supprimer un article</a>
            </div>
        </div>
    </div>
    <br>
<?php include 'Liste_article.php' ;
include 'Liste_brouillon.php'; ?>
    <?php
    if ($_SESSION['logged']) {
        echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' est connecté en tant que "' . $_SESSION['role'] . '" .';
    }
    else {
        echo 'connectez vous !!!';
    }
    ?>
</body>
</html>