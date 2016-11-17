<?php session_start();
include 'config.php';
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/js/bootstrap.min.js">
</head>
<body>

<?php include 'header.php' ?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php
            if(!$_SESSION['logged']){

            }
            else {
                echo '<a href="profil.php" class="user"><h4>'.$_SESSION['pseudo'].'</h4></a>';
            }
            ?>

        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Afficher_article.php">Blog</a></li>
            <?php if(!$_SESSION['logged']){

            }
            else {
                echo '<li><a href="profil.php">Profil</a></li>';
            }
            ?>

            <?php
            if($_SESSION['logged'] && $_SESSION['role'] == "admin") {
                echo '<li><a href="page_admin.php">Admin</a></li>';
            }
            ?>

        </ul>


        <ul class="nav navbar-nav navbar-right">



            <?php
            if(!$_SESSION['logged']){ ?>
                <li><a data-toggle="modal" data-target="#inscription"><span class="glyphicon glyphicon-user"></span>
                        inscription
                    </a></li>

                <!-- Modal -->
                <div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title " id="inscription">Inscription</h4>
                            </div>
                            <div class="modal-body">
                                <?php include"inscription.php"?>
                            </div>
                        </div>
                    </div>
                </div>

                <li><a data-toggle="modal" data-target="#connexion"><span class="glyphicon glyphicon-log-in"></span>
                        connexion
                    </a></li>

                <!-- Modal -->
                <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title " id="connexion">Connexion</h4>
                            </div>
                            <div class="modal-body">
                                <?php include"connexion.php"?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            else{

                echo '<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in"> Se déconnecter !</span></a></li>';
            }
            ?>
        </ul>
    </div>
</nav>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
