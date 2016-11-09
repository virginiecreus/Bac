<?php session_start();
include 'menu.php';
include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
if ($_SESSION['logged']) {
    echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' est connecté en tant que "' . $_SESSION['role'] . '" .';
}
else {
    echo 'connectez vous !!!';
}
?>

</body>

</html>