<?php include 'config.php';?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">

            <form action="traitement_modifier_avatar.php" method="post" enctype="multipart/form-data">
                Sélectionner une image à télécharger:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>


                <input  class="button col-md-offset-1" type="modifier" value="Modifier" name="submit">

            </form>
        </div>
    </div>
</div>
</body>
</html>
