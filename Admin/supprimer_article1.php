<?php include 'config.php'; ?>
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
    $art = $_POST['art'];

// On créé la requête

    $sup = mysqli_query($bdd, "DELETE 
From articles
WHERE id = '$art'
");
// on envoie la requête
    $res = mysqli_query($bdd, $sup);
    echo "Les données ont bien été supprimées";
}

?>
</body>
</html>

