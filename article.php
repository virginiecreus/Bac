<?php include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include 'menu.php'?>
<div class="container">
    <div class="row">
        <h2 class="page-header text-center font">Ajouter un Article !</h2>

    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form name="insertion" action="article1.php" method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Titre :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="titre" placeholder="Titre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Texte :</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="article" placeholder="Article"></textarea>
                        </div>
                    </div>

                    <div >

                        <div><a>Publier :</a>
                            <label for="name" class="control-label font">Oui</label>
                            <input  type="radio" name="publier" value="oui" >
                        </div>
                        <div>
                            <label for="name" class="control-label font">Non</label>
                            <input  type="radio" name="publier" value="non" >
                        </div>

                    </div>






                    <div class="col-md-6 col-md-offset-2">
                        <div class="col-md-2">
                            <input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-success">
                        </div>
                        <div class="col-md-2">
                            <a href="modifier_article.php"><bouton id="modidier" name="modidier" type="submit"  value="Modifier" class="btn btn-warning">Modifier</bouton></a>
                        </div>
                        <div class="col-md-2">
                            <a href="supprimer_article.php"><bouton  id="supprimer" name="supprimer" type="submit"  value="Supprimer" class="btn btn-danger">Supprimer</bouton></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>