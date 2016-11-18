<!DOCTYPE html>
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
<?php include 'menu.php'?>


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
    <!--Tableau  de l'article-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-primary">
                    <div class="panel-heading titre text-center">
                        <tr>
                            <td>Titre :</td>
                            <td><?php echo ($row['titre_article']); ?></td>
                        </tr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-3 col-lg-8 ">
                                <table class="table">
                                    <tbody>
                                    <tr class="article">
                                        <td>Article :</td>
                                        <td><?php echo($row['article']); ?></td>
                                    </tr>
                                    <tr class="auteur">
                                        <td>Publié par :</td>
                                        <td><?php echo($row['pseudo']); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fin de tableau-->
    <?php
}
// fin de la boucle
?>


<?php
//Si il n'y a pas de compte connecter alors il n'affiche rien
if(!$_SESSION['logged']){

}
//Sinon si le compte et connecter alors il affiche la modales commentaire
else{ ?>
    <div class="contenaire">
        <div class="row">
            <div class="col-md-offset-5">
                <!-- bouton de la modale pour mettre un commentaire -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#commentaire">
                    Mettre un commentaire
                </button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="commentaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title " id="commentaire">Mettre un commentaire</h4>
                </div>
                <div class="modal-body">
                    <?php include"commentaire.php"?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Fin de la modale -->
    <?php
}
?>



<?php include'afficher_commentaire.php'?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>