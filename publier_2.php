<?php include 'config.php';

// si champs rempli envoyer dans la bdd
if (isset($_GET ['id'])) {

    // on récupére les champs du formulaire
    $titre = $_GET['id'];
    $publier = 'oui';

    // On créé la requête

    $modif = mysqli_query($bdd, "UPDATE articles
                                 SET
                                  publier = '$publier'
                                 WHERE titre_article = '$titre'
                                ");
    // on envoie la requête
    $res = mysqli_query($bdd, $modif);
    header('Location:page_admin.php?ModificationReussi');
} else { // si champs pas rempli erreur
    header('Location:page_admin.php?ErreurModifier');
}
?>