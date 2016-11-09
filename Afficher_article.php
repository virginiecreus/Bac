<?php session_start();
include 'config.php'?>


<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<?php include 'menu.php'?>
<?php
// On créé la requête pour afficher les données qui sont unique publier
$requete = "SELECT * FROM articles WHERE publier ='oui'";
$exec = mysqli_query($bdd,$requete);
// On affiche le lignes les unes après les autres
$res = array();
while ($row = mysqli_fetch_array($exec)) {
    $res[] = $row;

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
        </div>
    </div>
</div>

<?php
// précise si vou êtes connecté et sous quel role 
if ($_SESSION['logged']) {
    echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' est connecté en tant que "' . $_SESSION['role'] . '" .';
}
else {
    echo 'connectez vous !!!';
}
?>
</body>
</html>