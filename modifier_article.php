<?php include 'config.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Modification des articles</title>
</head>
<body>


    <div class=" col-md-offset-2">
        <form name="insertion" action="modifier_article1.php" method="POST" class="form-horizontal">

            <select class="form-control col-md-5" name="art">
                <?php
                $sql= "SELECT * FROM articles";
                $req = $bdd->query($sql);
                // on envoie la requête
                while ($req1 = mysqli_fetch_object($req)) {
                    ?>


                    <option value="<?php echo $req1->id ?>"><?php echo $req1->titre_article ?></option>


                    <?php
                };
                ?>
            </select>
            <br>
            <br>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label font">Titre :</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="titre" placeholder="Titre">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Texte :</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" name="article" rows="10" cols="50" placeholder="Article"></textarea>
                </div>
            </div>
    </div>

    <p><strong>Publier :</strong>
        <label for="name" class="control-label font">Oui</label>
        <input type="radio" name="publier" value="oui">

        <label for="name" class="control-label font">Non</label>
        <input type="radio" name="publier" value="non">
    </p>

    <br>

        <input name="modifier" type="submit" value="Modifier" class="button">

    </form>


</body>
</html>