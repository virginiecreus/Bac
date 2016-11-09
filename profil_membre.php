<?php session_start();
include 'menu.php';
include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_SESSION["pseudo"]; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-8 col-lg-8 ">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nom :</td>
                                    <td><?php echo strtoupper($_SESSION['nom']); ?></td>
                                </tr>
                                <tr>
                                    <td>Prenom :</td>
                                    <td><?php echo strtoupper($_SESSION['prenom']); ?></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><?php echo strtoupper($_SESSION['mail']); ?></td>
                                </tr>
                                <tr>
                                    <td>Mot de passe :</td>
                                    <td><?php echo strtoupper($_SESSION['mot_de_passe']); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
