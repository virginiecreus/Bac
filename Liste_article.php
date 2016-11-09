<?php session_start();
include 'config.php';
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

    <table class="table">
        <thead class="thead-inverse text-center">
        <tr>
            <th>Titre : <?php echo $row['titre_article']; ?></th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Article: <?php echo $row['article']; ?></td>
        </tr>
        </tbody>

    </table>
    <?php
}
?>
</body>
</html>
