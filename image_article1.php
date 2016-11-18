<?php
session_start();
include ('config.php');

$target_dir = "uploads_articles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Vérifie qu'il s'agit bien d'une image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "ce fichier est bien une image ! " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "ce fichier n'est pas une image !";
        $uploadOk = 0;
    }
}

if(isset($_POST["submit"]) && (!empty($_FILES['fileToUpload']))) {
    $avatar = $_FILES['fileToUpload']['name'];
    $id = $_SESSION['id'];

    $sql = "UPDATE articles SET  
	`image` = '$image'
	WHERE id = '$id'";

}
if (mysqli_query($bdd, $sql)) {
    echo '<center><p class=\'text-danger\'>Votre image a bien été ajouté !</p></center>';
    header('Location: page_admin.php?ok');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($bdd);
    header('Location: page_admin.php?rerror');
}
var_dump($_FILES['fileToUpload']['name']);




mysqli_close($bdd);
// vérifie si l'image n'existe pas déjà
if (file_exists($target_file)) {
    echo "Image existante !";
    $uploadOk = 0;
}
// vérifier la taille
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Votre image est trop grande !";
    $uploadOk = 0;
}
// autoriser certain format
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Seul les images au format: jpg, jpeg, png et gif sont autorisé !";
    $uploadOk = 0;
}
//veifie si l'image à bien été ajouté
if ($uploadOk == 0) {
    echo "Désolé votre image n'a pas été téléchargé !";
// si toutes les conditions sont bonnes, on ajoute l'image
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "l'image ". basename( $_FILES["fileToUpload"]["name"]). " as bien été upload.";
    } else {
        echo "Une erreur c'est produite pendant le téléchargement !";
    }
}

