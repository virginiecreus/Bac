<?php session_start();
include 'menu.php';
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
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php
            // On créé la requête pour afficher les données qui sont unique publier
            $requete = "SELECT * FROM utilisateurs WHERE role ='membre'";
            $exec = mysqli_query($bdd,$requete);
            // On affiche le lignes les unes après les autres
            $res = array();
            while ($row = mysqli_fetch_array($exec)) {
                $res[] = $row;

                ?>
                <table class="table">
                    <thead class="thead-inverse text-center">
                    <tr>
                        <th>Pseudo : <?php echo $row['pseudo']; ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Nom : <?php echo $row['nom']; ?></td>
                    </tr>
                    <tr>
                        <td>Prenom : <?php echo $row['prenom']; ?></td>
                    </tr>
                    <tr>
                        <td>Email : <?php echo $row['mail']; ?></td>
                    </tr>
                    <tr>
                        <td>Mot de passe : <?php echo $row['mot_de_passe']; ?></td>
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
