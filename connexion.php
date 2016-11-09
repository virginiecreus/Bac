<?php session_start();
include 'config.php';
include 'menu.php';
?>
<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
    <body>
    <form class="form-horizontal" role="form" method="post" action="connexion1.php">
        <div class="form-group">
            <label for="mail" class="col-sm-3 control-label">email</label>
            <div class="col-sm-3">
                <input type="email" class="form-control" name="mail" placeholder="email">
            </div>
        </div>
        <div class="form-group">
            <label for="mot_de_passe" class="col-sm-3 control-label">mot de passe</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" name="mot_de_passe" placeholder="mot de passe">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">Se connecter</button>
            </div>
        </div>
    </form>
    <?php
    if ($_SESSION['logged']) {
        echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' est connecté en tant que "' . $_SESSION['role'] . '" .';
    }
    else {
        echo 'connectez vous !!!';
    }
    ?>

</body>

</html>