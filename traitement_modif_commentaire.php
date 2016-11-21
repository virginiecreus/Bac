<?php include 'config.php';

?>
<html>
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
// si champs rempli envoyer dans la bdd
if (isset($_POST ['modifier'])) {

// on récupére les champs du formulaire
$commentaire = $_POST['commentaire'];
$commentaires_id = $_POST['commentaires_id'];



// On créé la requête

$modif = mysqli_query($bdd, "UPDATE commentaires
SET commentaire = '$commentaire'
WHERE id = '$commentaires_id'
");
// on envoie la requête
$res = mysqli_query($bdd, $modif);
header('Location:Afficher_article.php?ModificationReussi');
}
else { // si champs pas rempli erreur
header('Location:Afficher_article.php?ErreurModifier');
}
?>

</body>
</html>
