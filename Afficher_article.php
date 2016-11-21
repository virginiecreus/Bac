<?php include 'menu.php'?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
// Requetes Sql pour afficher les article publier avec le pseudo
$requete = "SELECT * FROM articles
INNER JOIN utilisateurs
WHERE utilisateurs.id = articles.utilisateurs_id
AND publier='oui'";
// variable pour envoyer a la base de donnée
$exec = mysqli_query($bdd,$requete);
$res = array();
//boucle pour faire apparaitre chaque article publier de la base de donée
while ($row = mysqli_fetch_array($exec)) {

    $res[] = $row;
    ?>


    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="titre text-center" ;">Titre :<?php echo ($row['titre_article']); ?></p>

               <!-- <div class="btn-group" style="float:right;">

                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
                    </ul>
                </div> -->

                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img src="uploads_articles/<?php echo($row['image']); ?>" class="img-rounded center-block " width="100" height="150">
                        </a>
                    </div>
                    <div class="media-body auteur">
                        <?php echo($row['article']); ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <div class="panel-footer">
            <p class="auteur">Posté par :<?php echo ($row['pseudo']); ?></p>
        </div>
        </div>
    </div>

    <?php
}
?>


<?php
if(!$_SESSION['logged']){

}
else{ ?>
   <div class="container">
    <div class="row">
        <div class="col-md-offset-5">


            <!-- bouton pour acceder au modal de suppresion des articles -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commentaire">
                Mettre un commentaire
            </button>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="commentaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white">&times;</span>
                </button>
                <h4 class="modal-title titre " id="commentaire">Mettre un commentaire</h4>
            </div>
            <div class="modal-body body">
                <?php include"commentaire.php"?>
            </div>
        </div>
    </div>
</div>
<br>

<?php }
?>


<?php include'afficher_commentaire.php'?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>