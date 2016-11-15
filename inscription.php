
<?php session_start();
?>
<!DOCTYPE html>
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
        <h3 class="col-sm-offset-2">Inscription</h3>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">

<form action="inscription1.php" method="post" enctype="multipart/form-data" class="form-horizontal col-sm-offset-1">
    <div class="form-group">
        <div class="col-sm-4">
            <input class="form-horizontal form-control"  type="text" name="nom" placeholder="nom" required>
        </div>
    </div>
    <div class="form-group ">
        <div class="col-sm-4">
            <input class="form-horizontal form-control" type="text" name="prenom" placeholder="prenom" required>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-4">
            <input class="form-horizontal form-control" type="text" name="pseudo" placeholder="pseudo" required>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-4">
            <input class="form-horizontal form-control" type="email"  name="mail" placeholder="email" required>
        </div>
    </div>

    <div class="form-group">
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