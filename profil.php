<?php include 'menu.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$requete = 'SELECT * FROM utilisateurs
WHERE id = '.$_SESSION['id'].'
';
$exec = mysqli_query($bdd,$requete);
$res = array();
while ($row = mysqli_fetch_array($exec)) {
$res[] = $row;
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="uploads/<?php echo($row['avatar']); ?>" class="img-rounded center-block img-circle" width="100" height="150"><br>


                    <h3 class="panel-title text-center"><?php echo($row['pseudo']); ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-8 col-lg-8 ">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nom :</td>
                                    <td><?php echo($row['nom']); ?></td>
                                </tr>
                                <tr>
                                    <td>Prenom :</td>
                                    <td><?php echo($row['prenom']); ?></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><?php echo($row['mail']); ?></td>
                                </tr>
                                <tr>
                                    <td>Mot de passe :</td>
                                    <td><?php echo($row['mot_de_passe']); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <!-- modale -->
                    <a data-target="#modifier" data-original-title="Edit this user" data-toggle="modal"  class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="modifier">Modification</h4>
                                </div>
                                <div class="modal-body">
                                    <?php include"modifier_profil.php"?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin modale -->
                    <!-- modale -->
                    <a data-original-title="Remove this user" data-toggle="modal" type="button" class="btn btn-sm btn-danger" data-target="#supprime"><i class="glyphicon glyphicon-remove"></i></a>
                    <div class="modal fade" id="supprime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="supprime">Modification</h4>
                                </div>
                                <div class="modal-body">
                                    <?php include"supprimer_profil.php"?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin modale -->
                </div>    <?php include 'Ajout_avatar.php'?>
            </div>

        </div>
    </div>
</div>
    <?php
}
?>


</body>
</html>
