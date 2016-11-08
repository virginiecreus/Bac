<?php include 'config.php';
?>
<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$requete = "SELECT * FROM articles";
$exec = mysqli_query($bdd,$requete);
$res = array();
while ($row = mysqli_fetch_array($exec)) {
    $res[] = $row;

    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Titre article: <?php echo $row['titre_article']; ?></h1>
                <h2>Article: <?php echo $row['article']; ?></h2>
                <h3>Role: <?php echo $row['role']; ?></h3>
            </div>
        </div>
    </div>
    <?php
}
?>
</body>
</html>
