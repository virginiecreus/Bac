<?php
include 'menu.php';
// si champs rempli envoyer dans la bdd
if (isset($_POST['modifier'])) {

    // on récupére les champs du formulaire
    $nom = (string) $_POST['nom'];
    $prenom = (string)$_POST['prenom'];
    $mail =(string) $_POST['mail'];
    $mdp= (string)$_POST['mot_de_passe'];
    $pseudo = (string)$_POST['pseudo'];
    $id = (int )$_POST['id'];

    // On créé la requête

    $modif = mysqli_query($bdd, "UPDATE utilisateurs
                                 SET nom = '$nom',
                                      prenom = '$prenom',  mail = '$mail',
                                      mot_de_passe = '$mdp',  pseudo = '$pseudo'
                                 WHERE id = $id");
    // on envoie la requête
    $res = mysqli_query($bdd, $modif);

    if(mysqli_query($bdd, $modif)==true){
        echo "Les données ont bien été modifiées";

    } else{
        echo mysqli_error($bdd);
    }



}
?>
