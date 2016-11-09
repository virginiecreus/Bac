<?php
session_start();
include 'config.php';

// On démarre la session

// On n'effectue les traitement qu'à la condition que
// les informations aient été postées
if (isset($_POST) && (!empty($_POST['mail'])) && (!empty($_POST['mot_de_passe'])) ) {
    $email =  $_POST['mail'];
    $mdp = $_POST['mot_de_passe'];

    // On va chercher le mot de passe afférent à ce login
    $sql = "SELECT *
            FROM utilisateurs 
            WHERE mot_de_passe = '$mdp' AND mail = '$email'";
    $req = mysqli_query($bdd,$sql) or die('Erreur SQL : <br/>'.$sql);

    // On vérifie que l'utilisateur existe bien
    if (mysqli_num_rows($req) > 0) {
        $data = mysqli_fetch_assoc($req);

        // On vérifie que son mot de passe est correct
        if ($_POST['mail'] == $data['mail'] && $_POST['mot_de_passe'] == $data['mot_de_passe']){
            $_SESSION['logged'] = true;
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];
            $_SESSION['mail'] = $data['mail'];
            $_SESSION['mot_de_passe'] = $data['mot_de_passe'];
            $_SESSION['pseudo'] = $data['pseudo'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['utilisateur'] = $data;
            /**$_SESSION['nom_role'] = $data['nom_role'];**/
            header("Location:index.php?vousetesconnecte");
            /**var_dump($_SESSION);**/
        }
    }
}else{
    $_SESSION['logged'] = false;
    header("Location:connexion.php?error");
    /**var_dump($_SESSION);**/

}
?>