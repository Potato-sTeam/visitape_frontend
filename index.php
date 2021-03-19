<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitaPe </title>
    <!--Posicionamiento Seo-->
    <meta name="description" content="Turismo, Gastronomía, lugares, Viajes, Eventos, Fiestas Patronales,
    Cultura, Paisajes, Mochileros, Hoteles"/>
    <meta name="robots" content="index, follow, noimageindex, noarchive"/>
    <meta name="googlebot" content="index, follow, noimageindex, noarchive, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <!--Posicionamiento Seo-->
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
        <header class="menu" id="fixed">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent" >
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/img/logo-visita.png" alt="" height="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse nav-principal" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto text-md-left text-left nav-second">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="cercadeti.php"><i class="fas fa-street-view"></i> Cerca de ti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="festividades.php"><i class="fas fa-hat-cowboy"></i> Festividades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tuexperiencia.php"><i class="fas fa-hiking"></i> Tu Experiencia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php"><i class="fas fa-id-badge"></i> Contacto</a>
                            </li>
                            <!--<li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
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
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
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
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="fas fa-map-marked-alt" style="background-color: #234A59;"></span>
                                <h2>Lugares</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="fas fa-hotel" style="background-color: #648C67;"></span>
                                <h2>Hoteles</h2>
                                <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 margin-gral1">
                            <div class="content-main-1">
                                <a href="#"></a>
                                <span class="far fa-image" style="background-color: #B5BE6B;"></span>
                                <h2>Paisajes</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <button type="button" class="btn btn-outline-info btn-sm btn-block">Más Información</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-------------Main Content 2-------------->
                <div class="container margin-gral1">
                    <div class="row">
                        <div class="col-sm-12 col md-6 col-lg-7 main-content-2">
                            <h3>Recomendaciones:</h3>
                            <div class="wraped-scroll">
                                <div class="media">
                                    <img src="assets/img/huancayo.png" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/img/laguna.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="assets/img/yauyos.png" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col md-6 col-lg-5 main-content-2">
                            <h3>Comentarios:</h3>
                            <div class="wraped-scroll">
                                <div class="content-comment">
                                    <div class="Muigrig-rood">
                                        <ul class="js01">
                                            <li class="js01-a">
                                                <div class="js01-a-1">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="js01-a-2">
                                                    <div class="js01-a-2A name">
                                                        <div class="js01-a-2Aa">
                                                            NOMBRE
                                                        </div>
                                                        <div class="Star-rating">
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star"></span>
                                                            <span class="fas fa-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="js01-a-2B text">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                        </p>
                                                    </div>
                                                    <h6 class="js01-a-2C  text-bottom"> Jorge Alonso <small> 11 de enero</small></h6>
                                                </div>
                                            </li>
                                            <li class="js01-a">
                                                <div class="js01-a-1">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="js01-a-2">
                                                    <div class="js01-a-2A name">
                                                        <div class="js01-a-2Aa">
                                                            NOMBRE
                                                        </div>
                                                        <div class="Star-rating">
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="js01-a-2B text">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                        </p>
                                                    </div>
                                                    <h6 class="js01-a-2C  text-bottom"> Jorge Alonso <small> 11 de enero</small></h6>
                                                </div>
                                            </li>
                                            <li class="js01-a">
                                                <div class="js01-a-1">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="js01-a-2">
                                                    <div class="js01-a-2A name">
                                                        <div class="js01-a-2Aa">
                                                            NOMBRE
                                                        </div>
                                                        <div class="Star-rating">
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star star_checked"></span>
                                                            <span class="fas fa-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="js01-a-2B text">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                        </p>
                                                    </div>
                                                    <h6 class="js01-a-2C  text-bottom"> Jorge Alonso <small> 11 de enero</small></h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-dm-6 col-lg-3 margin-gral1 margin-gral2 wrap-colum">
                        <h5>¿Deseas Unirte?</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Haz Click aqui!!</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-dark" id="exampleModalLabel">Unete a Nosotros</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="#">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label text-info">Nombres:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label text-info">Apellidos:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label text-info">Celular:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label text-info">Mensaje:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-outline-info btn-block" data-dismiss="modal">Enviar</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-info">Enviar Mensaje</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-dm-6 col-lg-3 margin-gral1 margin-gral2 wrap-colum">
                        <h5>Contáctanos</h5>
                        <ul>
                            <li><i class="fas fa-paper-plane"></i> soporte@visita.pe</li>
                            <li><i class="far fa-paper-plane"></i> ventas@visita.pe</li>
                            <li><i class="fab fa-whatsapp"></i> +51 999 456 666</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-dm-6 col-lg-3 margin-gral1 margin-gral2 wrap-colum">
                        <h5>Suscríbete</h5>
                        <form class=" form-footer" method="POST" action="#">
                            <div class="input-group">
                                <input type="search" id="form1" class="form-control" placeholder="Escribe tu email"/>
                                <button type="submit" class="btn btn-primary">
                               <i class="far fa-paper-plane"></i>
                                </button>
                            </div>
                            <p style="font-weight: 700; font-size: 11px; font-style: oblique;">NOTA: Para enviarte muchas novedades y saber que eres nuestro amigo</p>
                        </form>
                    </div>
                    <div class="col-sm-12 col-dm-6 col-lg-3 margin-gral1 margin-gral2 wrap-colum">
                        <h5>Nuestras Redes Sociales</h5>
                        <ul>
                            <li class="Fluid-Social"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li class="Fluid-Social"><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li class="Fluid-Social"><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="text-center copyright-footer">Potato's Team 2021 - Todos los derechos reservados</p>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script tipe="text/javascript" src="assets/js/scriptfunction.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script>window.jQuery || document.write('<script src="./assets/js/query.slim.min.js"><\/script>')</script><script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script tipe="text/javascript" src="assets/js/apis.js"></script>
</body>
</html>