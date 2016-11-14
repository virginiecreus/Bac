<?php include 'config.php';
include 'menu.php'?>;
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <div class="container">
        <div class="frm-login" style="margin-top: 2px;">
            <div class="frm-head">
                <div class="round round-sm blue"><span class="glyphicon glyphicon-user"></span></div>
                <label class="control-label"><h4>Page de connexion!</h4></label>
            </div>
            <div class="frm-body">
                <form action="connexion1.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-3"><label class="control-label">Utilisateur: </label></div>
                        <div class="col-sm-4">
                            <input class="form-horizontal" type="text" name="mail" placeholder="@mail" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="control-label">Mot de passe: </label></div>
                        <div class="col-sm-4">
                            <input class="form-horizontal" type="password" name="mot_de_passe" placeholder="@mot de passe" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-2">
                            <input class="btn btn-success" type="submit" name="login" value="LogIn" style="width: 175px;"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        JQuery(document).ready(function(y){
            JQuery('#lg').click(function(){
                alert("hello");
            });
    </script>



</body>

</html>
