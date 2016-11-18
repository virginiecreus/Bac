
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
include 'config.php';
// si champs rempli envoyer dans la bdd
if (isset($_POST['supprimer'])) {

// on récupére les champs du formulaire
    $id = (int)$_POST['id'];

// On créé la requête

    $sup = "DELETE From utilisateurs WHERE id = '$id'";

// on envoie la requête
    $res = mysqli_query($bdd, $sup);
    header('Location:profil.php?SuppresionReussi');
}
else{
    header('Location:profil.php?ErreurSuppresion');
}

?>
</body>
</html>