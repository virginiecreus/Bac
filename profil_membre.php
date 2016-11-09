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
        <div class="col-md-8">

                <table class="table">
                    <thead class="thead-inverse text-center">
                    <tr>
                        <th>Pseudo : <?php echo $_SESSION['pseudo']; ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Nom : <?php echo $_SESSION['nom']; ?></td>
                    </tr>
                    <tr>
                        <td>Prenom : <?php echo $_SESSION['prenom']; ?></td>
                    </tr>
                    <tr>
                        <td>Email : <?php echo $_SESSION['mail']; ?></td>
                    </tr>
                    <tr>
                        <td>Mot de passe : <?php echo $_SESSION['mot_de_passe']; ?></td>
                    </tr>
                    </tbody>

                </table>
        </div>
    </div>
</div>

</body>
</html>
