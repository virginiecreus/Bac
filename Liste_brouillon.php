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

<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-0  toppad">
    <h3 class="article_admin">Brouillon</h3>
    <?php
    $requete = "SELECT * FROM articles
INNER JOIN utilisateurs
WHERE utilisateurs.id = articles.utilisateurs_id
AND publier='non'";
    $exec = mysqli_query($bdd, $requete);
    $res = array();
    while ($row = mysqli_fetch_array($exec)) {
        $res[] = $row;


        ?>

        <div class="panel panel-primary">
            <div class="panel-heading titre text-center">
                <tr>
                    <td>Titre:</td>
                    <td><?php echo strtoupper($row['titre_article']); ?></td>
                    <a class="btn btn-primary" href="publier_2.php?id=<?= $row['titre_article'] ?>">V</a>
                </tr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class=" col-md-8 col-lg-8 ">
                        <table class="table">
                            <tbody>
                            <tr class="article">
                                <td>Article:</td>
                                <td><?php echo($row['article']); ?></td>
                            </tr>
                            <tr>
                                <td class="auteur">Publié par:</td>
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
</div>
</body>
</html>