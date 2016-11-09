<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php session_start();
include 'config.php'; ?>
<?php

// si champs rempli envoyer dans la bdd
if (isset($_POST['modifier'])) {

    // on récupére les champs du formulaire
    $titre = $_POST['titre'];
    $article = $_POST['article'];
    $art = $_POST['art'];

    // On créé la requête

    $modif = mysqli_query($bdd, "UPDATE articles
                                 SET titre_article = '$titre',
                                      article = '$article'
                                 WHERE id = '$art'
                                ");
    // on envoie la requête
    $res = mysqli_query($bdd, $modif);
    echo "Les données ont bien été modifiées";
} else { // si champs pas rempli erreur
    echo "les champs sont vide , reesayez";
}
?>
</body>
</html>



   

