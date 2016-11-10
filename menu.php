<?php session_start();
include 'config.php';
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Blog</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="Afficher_article.php">Blog</a></li>
            <li><a href="profil.php">Profil</a></li>
            <?php
            if($_SESSION['logged'] && $_SESSION['role'] == "admin") {
                echo '<li><a href="page_admin.php">Admin</a></li>';
            }
            ?>

        </ul>


        <ul class="nav navbar-nav navbar-right">
            <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
            <?php
            if(!$_SESSION['logged']){
                echo '<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>';
            }
            else{
                echo '<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-in">Se déconnecter !</span></a></li>';
            }
            ?>
        </ul>
    </div>
</nav>

<?php
if ($_SESSION['logged']) {
echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'];
}
else {
 echo 'connectez vous !!!';
}
?>
</body>
</html>
