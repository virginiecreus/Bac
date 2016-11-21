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
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

            <?php
            $requetes = "SELECT * FROM commentaires
 JOIN utilisateurs ON commentaires.utilisateurs_id = utilisateurs.id

WHERE utilisateurs_id ";
            $execs = mysqli_query($bdd,$requetes);
            $ress = array();
            while ($rows = mysqli_fetch_array($execs)) {
                $ress[] = $rows;
                ?>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <tr>
                            <td>Publié par :</td>
                            <td><?php echo($rows['pseudo']); ?></td>
                            <br>
                            <td><?php echo ($rows['commentaire']); ?></td>
                        </tr>
                        <?php if($_SESSION['role'] == 'admin') { ?>
                            <input data-target="#modifier" data-toggle="modal" name="modifier" type="submit" value="Modifier" class="button">
                            <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="color: white">&times;</span>
                                            </button>
                                            <h4 style="color: white" class="modal-title text-center titre text " id="modifier">Modification</h4>
                                        </div>

                                        <div class="modal-body body">
                                            <?php include"modifier_commentaire.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a  class="close" href="traitement_supp_commentaire.php?id=<?= $rows['commentaire'] ?>">X</a>
                        <?php }

                        else {

                        }?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
