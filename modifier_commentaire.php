<?php include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Modification des commentaires</title>
</head>
<body>
<div class=" col-md-offset-2">
    <form name="insertion" action="traitement_modif_commentaire.php" method="POST" class="form-horizontal">

        <select class="form-control col-md-5" name="commentaires_id" >
            <?php
            $sql= "SELECT * FROM commentaires";
            $req = $bdd->query($sql);
            // on envoie la requête
            while ($req1 = mysqli_fetch_object($req)) {
                ?>


                <option value="<?php echo $req1->id ?>"><?php echo $req1->commentaire ?></option>



                <?php
            };
            ?>
        </select>
        <br>
        <br>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label font">Commentaire :</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="commentaire" placeholder="Commentaire">
            </div>
        </div>
</div>

<br>

<input name="modifier" type="submit" value="Modifier" class="button">

</form>

</body>
</html>
