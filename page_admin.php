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

<!-- <a href="article.php" target="_blank"><img src="img/ajout_article.jpeg"/></a><br>
                <a>Créer un article</a>
            </div>
            <div class="col-md-4">
                <a href="modifier_article.php" target="_blank"><img src="img/modifier_article.jpg"/></a><br>
                <a>Modifier un article</a>
            </div>
            <div class="col-md-4">
                <a href="supprimer_article.php" target="_blank"><img src="img/supprimer_article.jpeg"/></a><br>
                <a>Supprimer un article</a>
            </div>
        </div>
    </div>
    <br> -->
<?php include 'Liste_article.php' ;
include 'Liste_brouillon.php'; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>