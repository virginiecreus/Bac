
<?php session_start();
include 'menu.php'
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<div class="container">
    <div class="frm-login" style="margin-top: 2px;">
        <div class="frm-head">
            <div class="round round-sm blue"><span class="glyphicon glyphicon-user"></span>
                <label class="control-label"><h4>Page d'inscription! </h4></label>
            </div>
        </div>
        <div class="frm-body">
            <form action="inscription1.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-3">nom</label>
                    <div class="col-xs-3">
                        <input class="form-horizontal" type="text" name="nom" placeholder="Abra">
                    </div>
                </div>
                <div class="form-group ">
                    <label  class="control-label col-sm-3">prenom</label>
                    <div class="col-xs-3">
                        <input class="form-horizontal" type="text" name="prenom" placeholder="Kadabra">
                    </div>
                </div>
                <div class="form-group">
                    <label   class="control-label col-sm-3">pseudo</label>
                    <div class="col-xs-3">
                        <input class="form-horizontal" type="text" name="pseudo" placeholder="Alakazam">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-sm-3">Email</label>
                    <div class="col-xs-3">
                        <input class="form-horizontal" type="email"  name="mail" placeholder="AbraKadabraAlakazam@hotmail.fr">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Mot de passe</label>
                    <div class="col-xs-3">
                        <input class="form-horizontal" type="password" name="mdp" placeholder="">
                    </div>
                </div>


                <input type="file" name="avatar">


                <div class="form-group">
                    <div class="col-xs-3 col-xs-offset-4">
                        <input type="submit" name="ajouter" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
