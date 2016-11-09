<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="inscription.php">Inscription</a></li>
                            <li><a href="connexion.php">Connexion</a></li>
                            <br>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="Afficher_article.php">Blog</a></li>
                            <li><a href="profil_membre.php">Profil</a></li>
                            <?php // ajout des permision pour les admin
                            if ($_SESSION['role'] === 'admin') { ?>

                                <li><a href="page_admin.php">Admin</a></li>

                            <?php } ?>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">

        </div>
    </div>
</div>
</body>
</html>