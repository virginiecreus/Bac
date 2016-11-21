<?php include 'config.php';
?>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php include 'config.php';
// si champs rempli envoyer dans la bdd
if (isset($_GET['id'])) {

// on récupére les champs du formulaire
    $id = $_GET['id'];

// On créé la requête

    $sup = mysqli_query($bdd, "DELETE 
From commentaires
WHERE  commentaire = '$id'
");
// on envoie la requête
    $res = mysqli_query($bdd, $sup);
    header('Location:Afficher_article.php?SuppresionReussi');


}
else{
    header('Location:Afficher_article.php?ErreurSuppresion');
}

?>
</body>
</html>
