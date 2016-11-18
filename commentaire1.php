<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<?php include"config.php";


// si champs rempli envoye dans la bdd
if (isset($_POST['ajouter'])) {


    $commentaire = $_POST['commentaire'];
    $titre = $_POST['titre'];
    $users = $_SESSION['id'];


// On créé la requête
    $req = "INSERT INTO commentaires (commentaire, articles_id, utilisateurs_id) 
    VALUES ('$commentaire', '$titre', '$users')";
// on envoie la requête
    $res = mysqli_query($bdd, $req);

   header('Location:Afficher_article.php?CommentaireEnvoyer');
}
else { // si champs pas rempli erreur
   header('Location:Afficher_article.php?Erreur');
}
?>