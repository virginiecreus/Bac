<?php include 'config.php';
//include 'menu.php'?>
<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/js/bootstrap.min.js">
    <script type="text/javascript" src="connexion.js"></script>




</head>
<body>
<div class="container">
    <div class="row">
        <h3 class="col-sm-offset-2">Connexion</h3>
    </div>
</div>
<hr>

<form action="connexion1.php" method="post" class="form-horizontal">
    <div class="container">
        <div class="row">


            <div class="form-group">

                <div class="col-sm-4 col-sm-offset-1">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="mail" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-1">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="mot de passe" name="mot_de_passe" >
                </div>
            </div>

            <div class="form-group">
                <a href="inscription.php">S'inscrire</a>
                <div class="col-sm-2">

                </div> <input class="btn btn-success" type="submit" name="login" value="Connexion"
            </div>
        </div>
</form>

</body>

</html>
