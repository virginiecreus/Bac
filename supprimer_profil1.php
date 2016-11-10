<?php session_start();
include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php
// si champs rempli envoyer dans la bdd
if (isset($_POST['supprimer'])) {

// on récupére les champs du formulaire
    $id = (int)$_POST['id'];

// On créé la requête

    $sup = mysqli_query($bdd, "DELETE 
From utilisateurs
WHERE id = '$id'
");
// on envoie la requête
    $res = mysqli_query($bdd, $sup);
    echo "Les données ont bien été supprimées";
}

?>
</body>
</html>