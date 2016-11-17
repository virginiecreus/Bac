<?php session_start();
include "config.php"; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<section class="couleur">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form name="insertion" action="commentaire1.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="titre">
                        <?php
                        $sql= "SELECT * FROM articles";
                        $req = $bdd->query($sql);

                        ?>
                        <?php
                        // on envoie la requête
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo  $req1->titre_article ?></option>

                        <?php };
                        ?>

                    </select>
                    <br>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Commentaire:</label>
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control" name="commentaire" placeholder="Commentaire"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-8">
                            <center><input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn"></center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
