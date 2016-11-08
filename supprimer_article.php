<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'menu.php'; ?>
<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Supprimer un article !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form name="insertion" action="supprimer_article1.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="art">
                        <?php
                        $sql= "SELECT * FROM articles";
                        $req = $bdd->query($sql);
                        ?>
                        <?php
                        // on envoie la requête
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo $req1->titre_article ?></option>

                        <?php };
                        ?>
                    </select>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="col-md-2">
                            <a href="article.php"><bouton id="ajouter" name="ajouter" type="submit"  value="Ajouter" class="btn btn-success">Ajouter</bouton></a>
                        </div> 
                        <div class="col-md-2">
                            <a href="modifier_article.php"><bouton  id="modifier" name="modifier" type="submit"  value="Modifier" class="btn btn-warning">Modifier</bouton></a>
                        </div>
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