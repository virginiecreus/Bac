
<?php include 'menu.php'?>


<form action="inscription1.php" method="post">
    <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">nom</label>
        <div class="col-xs-3">
            <input class="form-control" type="text" name="nom" placeholder="Abra">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">prenom</label>
        <div class="col-xs-3">
            <input class="form-control" type="text" name="prenom" placeholder="Kadabra">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">pseudo</label>
        <div class="col-xs-3">
            <input class="form-control" type="text" name="pseudo" placeholder="Alakazam">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">Email</label>
        <div class="col-xs-3">
            <input class="form-control" type="email"  name="mail" placeholder="AbraKadabraAlakazam@hotmail.fr">
        </div>
    </div>

    <div class="form-group row">
        <label for="example-password-input" class="col-xs-1 col-form-label">Mot de passe</label>
        <div class="col-xs-3">
            <input class="form-control" type="password" name="mdp" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-3 col-xs-offset-2">
    <input type="submit" name="ajouter" class="btn btn-success">
    </div>
    </div>
 </form>
