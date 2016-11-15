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
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="uploads/<?php echo $_SESSION['avatar']; ?>" class="img-circle center-block img-responsive"><br>


                    <h3 class="panel-title text-center"><?php echo $_SESSION["pseudo"]; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-8 col-lg-8 ">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nom :</td>
                                    <td><?php echo $_SESSION['nom']; ?></td>
                                </tr>
                                <tr>
                                    <td>Prenom :</td>
                                    <td><?php echo $_SESSION['prenom']; ?></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><?php echo $_SESSION['mail']; ?></td>
                                </tr>
                                <tr>
                                    <td>Mot de passe :</td>
                                    <td><?php echo $_SESSION['mot_de_passe']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
                <div class="panel-footer">

                            <a data-target="#modifier" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <?php include 'Ajout_avatar.php'?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">

<button type="button" class="btn btn-primary btn-lg col-md-offset-5" data-toggle="modal" data-target="#modifier">
    Modifier profil
</button>

<!-- Modal -->
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
    </div>
    </div>

        <br>
<div class="container">
    <div class="row">
<button type="button" class="btn btn-primary btn-lg col-md-offset-5" data-toggle="modal" data-target="#supprime">
    Supprimer profil
</button>

<!-- Modal -->
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
</div>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
