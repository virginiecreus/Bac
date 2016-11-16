<?php session_start();
include 'menu.php';
include 'config.php';
?>
<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="caroussel.js"></script>
    </head>
        <body>
        <div class="container">
            <div class="row well"> <div class="col-xs-8 col-sm-12 col-md-12">
                    <h2 class="text-center">Qui somme nous ?</h2>
                    <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
                        <div class="row">
                            <div class="col-md-4">
                    <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up"
                          style="font-size: 30px"></span>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                        <br />
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-12 col-md-12">
                                        <a href="http://dotstrap.com/"> <img src="img/virginie.jpeg" class="thumbnail center-block"
                                                                             alt="Image" /></a>
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
                                        <a href="http://dotstrap.com/"> <img src="img/djamel.jpeg" class="thumbnail center-block"
                                                                             alt="Image" /></a>
                                    </div>
                                    <h1 class="col-xs-6 col-sm-12 col-md-12 text-center" style="color: blue">
                                       Djamel
                                    </h1>
                                </div>
                                <!--/row-fluid-->
                            </div>
                            <!--/item-->
                            <div class="item ">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-12 col-md-12">
                                        <a href="http://dotstrap.com/"> <img src="img/fabien.jpeg" class="thumbnail center-block"
                                                                             alt="Image" /></a>
                                    </div>
                                    <h1 class="col-xs-6 col-sm-12 col-md-12 text-center" style="color: green">
                                        Fabien
                                    </h1>
                                </div>
                                <!--/row-fluid-->
                            </div>
                            <!--/item-->
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                    <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                          style="color: Black; font-size: 30px"></span>
                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>