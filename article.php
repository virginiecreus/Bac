<?php session_start();
include 'config.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <form name="insertion" action="article1.php" method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label font">Titre :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="titre" placeholder="Titre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Texte :</label>
                        <div class="col-sm-5">
                            <textarea type="text" class="form-control" name="article" placeholder="Article"></textarea>
                        </div>
                    </div>

                    <div >

                        <div class="col-lg-offset-1"><a>Publier :</a>
                            <label for="name" class="control-label font">Oui</label>
                            <input  type="radio" name="publier" value="oui" >


                            <label for="name" class="control-label font">Non</label>
                            <input  type="radio" name="publier" value="non" >
                    </div>

                    </div>






                    <div class="col-md-6 col-md-offset-3">
                        <div class="col-md-2 ">
                            <input id="ajouter" name="ajouter" type="submit" value="Ajouter" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>