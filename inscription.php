<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/js/bootstrap.min.js">

</head>
<body>


<div class="container">
    <div class="row">

        <form action="inscription1.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <i class="glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control"  type="text" name="nom" placeholder="nom" required>
                </div>
            </div>
            <div class="form-group ">
                <i class="glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="text" name="prenom" placeholder="prenom" required>
                </div>
            </div>
            <div class="form-group">
                <i class="glyphicon glyphicon-user control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="text" name="pseudo" placeholder="pseudo" required>
                </div>
            </div>
            <div class="form-group">
                <i class="glyphicon glyphicon-envelope control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="email"  name="mail" placeholder="email" required>
                </div>
            </div>

            <div class="form-group">
                <i class="glyphicon glyphicon-option-horizontal control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input class="form-horizontal form-control" type="password" name="mdp" placeholder="mot de passe" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-1">
                    <input type="submit" name="ajouter" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>