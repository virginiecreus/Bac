<?php
include'config.php';?>
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
        <form action="connexion1.php" method="post" class="form-horizontal" >
            <div class="form-group">
                <i class="glyphicon glyphicon-envelope control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input type="email" class="form-control" placeholder="Email" name="mail" required >
                </div>
            </div>

            <div class="form-group">
                <i class="glyphicon glyphicon-option-horizontal control-label col-sm-1 glyphe"></i>
                <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="mot_de_passe" required >
                </div>
            </div>

            <div class="form-group">

                <div class="col-sm-2">

                </div> <input class="button" type="submit" name="login" value="Connexion">
            </div>

        </form>
    </div>
</div>

</body>

</html>