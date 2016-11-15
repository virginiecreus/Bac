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

                <form action="Ajout_avatar1.php" method="post" enctype="multipart/form-data">
                    Veuillez selectionner votre image:  <input type="file" name="fileToUpload" id="fileToUpload">
                                                        <input type="submit" value="Upload Image" name="ajouté">

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
