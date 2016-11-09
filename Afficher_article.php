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
            $requete = "SELECT * FROM articles
INNER JOIN utilisateurs
WHERE utilisateurs.id = articles.utilisateurs_id
AND publier='oui'";
            $exec = mysqli_query($bdd,$requete);
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
                    <tbody>
                    <tr>
                        <td>
                        <td>Utilisateur: <?php echo $row['pseudo']; ?></td>
                        </td>
                    </tr>
                    </tbody>

                </table>
                <?php
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>