<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php session_start();
include 'config.php';
?>
<?php

// si champs rempli envoyer dans la bdd
if (isset($_POST['titre']) && isset($_POST['article'])) {

// on récupére les champs du formulaire
    $titre = addslashes($_POST['titre']);
    $article = addslashes($_POST['article']);
    $publier = htmlspecialchars($_POST['publier']);
    $users = $_SESSION['id'];


// On créé la requête
    $req = "INSERT INTO articles (titre_article, article, utilisateurs_id, publier) 
VALUES ('$titre', '$article', '$users', '$publier')";
// on envoie la requête
    $res = mysqli_query($bdd, $req);

    echo 'Les données ont bien été Ajoutées';
} else { // si champs pas rempli erreur
    echo "les champs sont vide , reesayez";
}

?>
    </body>
</html>