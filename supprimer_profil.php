<?php session_start();
include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Supprimer le profil</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <form name="insertion" action="supprimer_profil1.php" method="POST" class="form-horizontal">
                    <br>
                    <p  class="col-xs-offset-2" style="color: white">Etes vous sur de vouloir supprimer ce compte ?</p>
                    <div class="col-md-6 col-md-offset-3 col-xs-offset-4">

                            <input id="supprimer" name="supprimer" type="submit" value="Supprimer" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>