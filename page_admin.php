<?php session_start();
include 'menu.php';
include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'Liste_article.php' ;
include 'Liste_brouillon.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3">
<!-- bouton pour acceder au modal des modification-->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ajouter">
    Ajouter un article
</button>

<!-- Modal -->
<div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="ajouter">Ajouter un article</h4>
            </div>
            <div class="modal-body">
                <?php include"article.php"?>
            </div>
        </div>
    </div>
</div>

<!-- bouton pour acceder au modal d'ajout des articles -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modifier">
   Modifier un article
</button>

<!-- Modal -->
<div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title " id="modifer">Modifier un article</h4>
            </div>
            <div class="modal-body">
                <?php include"modifier_article.php"?>
            </div>
        </div>
    </div>
</div>



<!-- bouton pour acceder au modal de suppresion des articles -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#supprimer">
          Supprimer un article
</button>

<!-- Modal -->
<div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title " id="supprimer">Supprimer un article </h4>
            </div>
            <div class="modal-body">
                <?php include"supprimer_article.php"?>
            </div>
        </div>
    </div>
</div>
</div>
        <div class="container">
            <div class="row">
                <?php
                $requete = "SELECT * FROM utilisateurs";
                $exec = mysqli_query($bdd,$requete);
                $res = array();
                while ($row = mysqli_fetch_array($exec)) {
                $res[] = $row;
                ?>
                <h2 class ="style">Gestion de l'administrateur</h2>
                <table class="table">
                    <thead>
                    <tr class="style">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        <th>Avatar</th>
                        <th>Pseudo</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="style">
                        <td><?php echo $row['nom']?></td>
                        <td><?php echo $row['prenom']?></td>
                        <td><?php echo $row['mail']?></td>
                        <td><?php echo $row['mot_de_passe']?></td>
                        <td><?php echo $row['avatar']?></td>
                        <td><?php echo $row['pseudo']?></td>
                        <td><?php echo $row['role']?></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <?php
        }
        ?>
    </div>
    </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>