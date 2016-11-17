<?php session_start();
include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
<?php
$requete = "SELECT * FROM articles
INNER JOIN utilisateurs
WHERE utilisateurs.id = articles.utilisateurs_id
AND publier='non'";
$exec = mysqli_query($bdd,$requete);
$res = array();
while ($row = mysqli_fetch_array($exec)) {
    $res[] = $row;


    ?>

    <div class="panel panel-default">
        <div class="panel-heading titre text-center">
            <tr>
                <td>Titre :</td>
                <td><?php echo strtoupper($row['titre_article']); ?></td>
            </tr>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class=" col-md-8 col-lg-8 ">
                    <table class="table">
                        <tbody>
                        <tr class="article">
                            <td>Article :</td>
                            <td><?php echo($row['article']); ?></td>
                        </tr>
                        <tr>
                            <td class="auteur">Publié par :</td>
                            <td><?php echo($row['pseudo']); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php

?>
        </div>
    </div>
</div>
</body>
</html>