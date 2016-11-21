<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/gif" href="img/gps-satellites-espace-icone-8581-32.png">
    <script type="text/javascript" src="caroussel.js"></script>
    <title>Page d'accueil</title>
</head>
<body>
<?php include'menu.php'?>
<div class="container">
    <div class="row"> <div class="col-xs-8 col-sm-12 col-md-12">
            <h2 class="text-center titre" >Qui somme nous ?</h2>
            <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">


                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-md-12">
                                <img src="img/virginie.jpeg" class="thumbnail center-block"
                                     alt="Image" />
                            </div>
                            <h1 class="col-xs-6 col-sm-12 col-md-12 text-center" style="color: deeppink">
                                Virginie
                            </h1>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-md-12">
                                <img src="img/djamel.jpeg" class="thumbnail center-block"
                                     alt="Image" />
                            </div>
                            <h1 class="col-xs-6 col-sm-12 col-md-12 text-center" style="color: White">
                                Djamel
                            </h1>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-md-12">
                                <img src="img/fabien.jpeg" class="thumbnail center-block"
                                     alt="Image" />
                            </div>
                            <h1 class="col-xs-6 col-sm-12 col-md-12 text-center" style="color: green">
                                Fabien
                            </h1>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>