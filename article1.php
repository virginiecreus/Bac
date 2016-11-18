<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<?php include 'config.php';

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

    header('Location:page_admin.php?AjoutReussi');
} else { // si champs pas rempli erreur
    header('Location:page_admin.php?ErreurAjout');
}

?>
    </body>
</html>