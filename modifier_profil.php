<?php session_start();
include 'menu.php';
include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Modifier un profil !</h2>
        <div class="col-md-5 col-sm-6 col-xs-12">
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form name="insertion" action="modifier_profil1.php" method="POST" class="form-horizontal">
                    <select class="form-control" name="id">
                        <?php
                        //si il manque pas id et qu'il est pas vide
                        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
                            $id=$_SESSION['id'];

                        }
                        //query
                        $sql= "SELECT * FROM utilisateurs WHERE id = $id";
                        //send query
                        $req = $bdd->query($sql);
                        ?>
                        <?php
                        // affichage de l'user
                        while ($req1 = mysqli_fetch_object($req)) { ?>
                            <option value="<?php echo $req1->id ?>"><?php echo $req1->pseudo ?></option>

                        <?php };
                        ?>
                    </select>
                        <!-- debut formulaire-->
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Nom :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Prenom :</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="prenom" placeholder="Prénom"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Mail:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mail" placeholder="Mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Mot de passe:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mot_de_passe" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Pseudo :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                        </div>
                    </div>


                    <div class="col-md-6 col-md-offset-2">
                        <div class="col-md-2">
                            <input id="modifier" name="modifier" type="submit" value="Modifier" class="btn btn-warning">
                        </div>
                        <div class="col-md-2">
                            <a href="supprimer_profil.php"><bouton  id="supprimer" name="supprimer" type="submit"  value="Supprimer" class="btn btn-danger">Supprimer</bouton></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>
