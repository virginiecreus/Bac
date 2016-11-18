<?php session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Modification du profil</title>
</head>
<body>

<div class="container">
    <div class="row">
        <form name="insertion" action="modifier_profil1.php" method="POST" class="form-horizontal">

            <div class="form-group">
                <i class="glyphe glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control"  type="text" name="nom" placeholder="nom">
                </div>
            </div>
            <div class="form-group ">
                <i class="glyphe glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="text" name="prenom" placeholder="prenom">
                </div>
            </div>
            <div class="form-group">
                <i class="glyphe glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="text" name="pseudo" placeholder="pseudo">
                </div>
            </div>
            <div class="form-group">
                <i class="glyphe glypphe glyphicon glyphicon-envelope control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="email"  name="mail" placeholder="email">
                </div>
            </div>

            <div class="form-group">
                <i class="glyphe glyphicon glyphicon-option-horizontal control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="password" name="mdp" placeholder="mot de passe">
                </div>
            </div>

            <div class="col-md-2 col-md-offset-2 col-xs-offset-4">
                <input id="modifier" name="modifier" type="submit" value="Modifier" class="button">
            </div>
        </form>
    </div>
</div>



</body>

</html>

