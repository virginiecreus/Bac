<?php
session_start();
include 'config.php';
include 'menu.php';

// On démarre la session

// On n'effectue les traitement qu'à la condition que
// les informations aient été postées
if (isset($_POST) && (!empty($_POST['mail'])) && (!empty($_POST['mot_de_passe'])) ) {
    $email =  $_POST['mail'];
    $mdp = $_POST['mot_de_passe'];

    // On va chercher le mot de passe afférent à ce login
    $sql = "SELECT *
            FROM utilisateurs 
            WHERE mot_de_passe = '$mdp' AND mail = '$email'";
    $req = mysqli_query($bdd,$sql) or die('Erreur SQL : <br/>'.$sql);

    // On vérifie que l'utilisateur existe bien
    if (mysqli_num_rows($req) > 0) {
        $data = mysqli_fetch_assoc($req);

        // On vérifie que son mot de passe est correct
        if ($_POST['mail'] == $data['mail'] && $_POST['mot_de_passe'] == $data['mot_de_passe']){
            $_SESSION['logged'] = true;
            $_SESSION['mail'] = $data['mail'];
            $_SESSION['mot_de_passe'] = $data['mot_de_passe'];
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['utilisateur'] = $data;
            $_SESSION['pseudo']=$data['pseudo'];
            $_SESSION['avatar']=$data['avatar'];
            $_SESSION['id']=$data['id'];
            /**$_SESSION['nom_role'] = $data['nom_role'];**/
            header("Location:index.php?vousetesconnecte");
            /**var_dump($_SESSION);**/
        }
    }
}else{
    $_SESSION['logged'] = false;
    header("Location:connexion.php?error");

}
?>
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
        <form action="connexion.php" method="post" class="form-horizontal">

            <div class="form-group">
                <i class="glyphicon glyphicon-envelope control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input type="email" class="form-control" placeholder="Email" name="mail" required >
                </div>
            </div>

            <div class="form-group">
                <i class="glyphicon glyphicon-option-horizontal control-label col-sm-1"></i>
                <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="mot_de_passe" required >
                </div>
            </div>

            <div class="form-group">

                <div class="col-sm-2">

                </div> <input class="btn btn-success" type="submit" name="login" value="Connexion"
            </div>

        </form>
    </div>
</div>

</body>

</html>