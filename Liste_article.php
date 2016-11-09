<?php include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//on sélectionne la table articles et on lui demande d'afficher que les articles dont le champs publier vaut non
$requete = "SELECT * FROM articles WHERE publier ='non'";
$exec = mysqli_query($bdd,$requete); //on execute la connexion à la bdd et le select
$res = array(); //on affiche le résultat en tableau
while ($row = mysqli_fetch_array($exec)) {
    $res[] = $row; // notre boucle avec la variable qui correspond à afficher les champs de notre bdd

    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h1>Titre article: <?php echo $row['titre_article']; ?></h1>
                <h2>Article: <?php echo $row['article']; ?></h2>
                <h3>Publier: <?php echo $row['publier']; ?></h3>
            </div>
        </div>
    </div>
    <?php
}
?>
</body>
</html>
