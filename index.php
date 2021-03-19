<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitaPe </title>
    <?php include ("codes/meta.php"); ?>
    <link rel="icon" type="image/png" href="./assets/img/logo.ico">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <a class="arrow-up" id="back_top">
        <i class="fa fa-arrow-up"></i>
    </a>
    <div class="dashboard-content">
    <?php include ("codes/header.php"); ?>
        <!-------------Maintop-------------->
        <section class="content-wrap">
            <div class="container">
                <form class="margin-gral1  margin-gral2 Form-Search" method="POST" action="#">
                    <div class="input-group">
                        <input type="search" id="form1" class="form-control" placeholder="¿Dónde Estas? | ¿A Dónde Irás?" />
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </form>
                <div class="row margin-gral2">
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IGDcIQz7Jes?autoplay=1&mute=1&start=20" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <!-------------Slider-------------->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" id="slider">
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="fa fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------Main Content 1-------------->
            <div class="container-fluid wrap_padding" style="background-color: #eee;">
                <div class="container">
                    <div class="row main1">
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="fas fa-suitcase-rolling" style="background-color: #252C3F;"></span>
                                <h2>Viajes</h2>
                                <p>
                                    No lo pienese más y alista tus maletas. Y viaja hoy mismo!! Aprovecha las ofertas diarias!!!
                                </p>
                                <!--<button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>-->
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="fas fa-map-marked-alt" style="background-color: #234A59;"></span>
                                <h2>Lugares</h2>
                                <p>
                                    VisitaPe te ofrece los lugares más divertidos, que están cerda de ti!!!
                                </p>
                                <!--<button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>-->
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="fas fa-hotel" style="background-color: #648C67;"></span>
                                <h2>Hoteles</h2>
                                <p>
                                    Te damos las valoraciones y mejores precios de hoteles creca tuyo ;)
                                </p>
                                <!--<button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>-->
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="far fa-image" style="background-color: #B5BE6B;"></span>
                                <h2>Paisajes</h2>
                                <p>
                                    Nos encargamos de llevarte a los paisajes mas bellso. Tú decides!!!
                                </p>
                                <!--<button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>-->
                            </div>

                        </div>
                    </div>
                </div>
                <!-------------Main Content 2-------------->
                <div class="container margin-gral1">
                    <div class="row">
                        <div class="col-sm-12 col md-6 col-lg-7 main-content-2">
                            <h3>Recomendaciones:</h3>
                            <div class="wraped-scroll" id="recomendaciones">
                                
                            </div>
                        </div>
                        <div class="col-sm-12 col md-6 col-lg-5 main-content-2">
                            <h3>Comentarios:</h3>
                            <div class="wraped-scroll">
                                <div class="content-comment">
                                    <div class="Muigrig-rood">
                                        <ul class="js01" id="comentario">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include ("codes/footer.php"); ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script tipe="text/javascript" src="assets/js/scriptfunction.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script>window.jQuery || document.write('<script src="./assets/js/query.slim.min.js"><\/script>')</script><script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script tipe="text/javascript" src="assets/js/apis.js"></script>
</body>
</html>