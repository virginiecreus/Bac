<?php session_start();
include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <form name="insertion" action="supprimer_profil1.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="id">
                        <?php
                        //si il manque pas id et qu'il est pas vide
                        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
                            $id=$_SESSION['id'];

                        }

                        $sql= "SELECT * FROM utilisateurs WHERE id = $id";
                        $req = $bdd->query($sql);
                        ?>
                        <?php
                        // on envoie la requête
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo $req1->pseudo ?></option>

                        <?php };
                        ?>
                    </select>
                    <br>
                    <div class="col-md-6 col-md-offset-2">
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