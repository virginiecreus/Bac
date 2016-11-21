<?php include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Supprimer les commentaires</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <form name="insertion" action="traitement_supp_commentaire.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="commentaires_id">
                        <?php
                        $sql= "SELECT * FROM commentaires";
                        $req = $bdd->query($sql);
                        ?>
                        <?php
                        // on envoie la requête
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo $req1->commentaire ?></option>

                        <?php };
                        ?>
                    </select>
                    <br>
                    <p style="color: white">Voulez-vous vraiment supprimer cette article ?</p>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="col-md-2">
                            <input id="supprimer" name="supprimer" type="submit" value="Supprimer" class="btn btn-danger">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
