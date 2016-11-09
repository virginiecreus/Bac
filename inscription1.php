<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php session_start();
include'config.php';
// verifie si les champs sont vide et recupere les champs
   if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mdp'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pseudo = $_POST['pseudo'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

//insert les données
        $req = "INSERT INTO utilisateurs (nom,prenom,mail,mot_de_passe,pseudo,role) VALUE ('$nom','$prenom','$mail','$mdp','$pseudo','membre')";

// envoie a la base de donnée
mysqli_query($bdd,$req);

 echo'Ajouté';
     header('Location: index.php ');

   }
else{
    echo"erreur";
}

?>
 </body>
</html>

