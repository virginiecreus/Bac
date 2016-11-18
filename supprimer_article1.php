<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
<?php include 'config.php';
// si champs rempli envoyer dans la bdd
if (isset($_POST['supprimer'])) {

// on récupére les champs du formulaire
    $art = $_POST['art'];

// On créé la requête

    $sup = mysqli_query($bdd, "DELETE 
From articles
WHERE  id = '$art'
");
// on envoie la requête
    $res = mysqli_query($bdd, $sup);
    header('Location:page_admin.php?SuppresionReussi');


}
else{
    header('Location:page_admin.php?ErreurSuppresion');
}

?>
</body>
</html>

