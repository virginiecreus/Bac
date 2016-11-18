<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<?php include 'config.php';

// si champs rempli envoyer dans la bdd
if (isset($_POST['modifier'])) {

    // on récupére les champs du formulaire
    $titre = $_POST['titre'];
    $article = $_POST['article'];
    $publier = htmlspecialchars($_POST['publier']);
    $users = $_SESSION['id'];
    $art = $_POST['art'];

    // On créé la requête

    $modif = mysqli_query($bdd, "UPDATE articles
                                 SET titre_article = '$titre',
                                      article = '$article',
                                      publier = '$publier'
                                 WHERE id = '$art'
                                ");
    // on envoie la requête
    $res = mysqli_query($bdd, $modif);
   header('Location:page_admin.php?ModificationReussi');
}
else { // si champs pas rempli erreur
    header('Location:page_admin.php?ErreurModifier');
}
?>
</body>
</html>



   

