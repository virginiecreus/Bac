<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php session_start();
include 'config.php';
?>
<?php

if ($_FILES['image']['error']) {
    switch ($_FILES['image']['error']){
        case 1: // UPLOAD_ERR_INI_SIZE
            echo "La taille du fichier est plus grande que la limite autorisée par le serveur.";
            break;
        case 2: // UPLOAD_ERR_FORM_SIZE
            echo "La taille du fichier est plus grande que la limite autorisée par le formulaire.";
            break;
        case 3: // UPLOAD_ERR_PARTIAL
            echo "L'envoi du fichier a été interrompu pendant le transfert.";

            break;
        case 4: // UPLOAD_ERR_NO_FILE
            echo "La taille du fichier que vous avez envoyé est nulle.";
            break;
    }
}
else {
//s'il n'y a pas d'erreur alors $_FILES['image']['error'] vaut 0
    echo "Aucune erreur dans le transfert du fichier.<br />";
    if ((isset($_FILES['image']['name'])&&($_FILES['image']['error'] == UPLOAD_ERR_OK))) {
        $chemin_destination = 'uploads_articles/';
        //déplacement du fichier du répertoire temporaire (stocké
        //par défaut) dans le répertoire de destination
        move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination.$_FILES['image']['name']);
        echo "Le fichier ".$_FILES['image']['name']." a été copié dans le dossier uploads_articles";
    }
    else {
        echo "Le fichier n'a pas pu être copié dans le dossier uploads_articles.";
    }
}

$requete = "INSERT INTO articles (image, titre_article, article , utilisateurs_id, publier ) VALUES ('".$_FILES['image']['name']."','".htmlentities(addslashes($_POST['titre']), ENT_QUOTES)."','".htmlentities (addslashes($_POST['article']) , ENT_QUOTES)."','".htmlentities(addslashes($_POST['utilisateurs_id']), ENT_QUOTES)."' ,'".htmlentities(addslashes($_POST['publier']), ENT_QUOTES)."')";
$resultat = mysqli_query($bdd,$requete);
$identifiant = mysqli_insert_id($bdd);
/* Fermeture de la connexion */
mysqli_close($bdd);

if ($identifiant != 0) {
    echo "<br />Ajout de l'article réussi.<br /><br />";
}
else {
    echo "<br />L'article n'a pas pu être ajouté.<br /><br />";
}
?>
<a href="page_admin.php" >retour à la page d'ajout d'articles</a>
</body>
</html>
    </body>
</html>