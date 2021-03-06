<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitaPe</title>
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
    <link href='./assets/css/fullcalendar/main.css' rel='stylesheet' />
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
                                <a class="nav-link" aria-current="page" href="cercadeti.php"><i class="fas fa-street-view"></i> Cerca de ti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="festividades.php"><i class="fas fa-hat-cowboy"></i> Festividades</a>
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
            <div class="container-fluid breadcrumb-ini">
                <h4>Festividades</h4>
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Festividades
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container-fluid wrap_padding" style="background-color: #eee;">
                <div class="container">
                    <div class="row">
                        <div class="col bg-white pt-3 rounded-sm">
                            <div id='calendario'></div>
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
    <script src='./assets/js/fullcalendar/main.js'></script>
    <script src='./assets/js/fullcalendar/locales/es.js'></script>
    <script>
        var eventos=[
            {
                "title": "Festividad 1",
                "start": "2021-02-15",
                "url": "#",
                "img": "./assets/img/lugares/lugar1.png"
            },
            {
                "title": "Festividad 2",
                "start": "2021-02-15",
                "url": "#",
                "img": "./assets/img/lugares/lugar2.png"
            },
            {
                "title": "Festividad 3",
                "start": "2021-02-25",
                "url": "#",
                "img": "./assets/img/lugares/lugar3.png"
            },
        ]
        var calendario = document.getElementById('calendario');
        var calendario = new FullCalendar.Calendar(calendario, {
            timeZone: 'America/Lima',
            themeSystem: 'bootstrap',
            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,listMonth'
            },
            weekNumbers: true,
            locale: 'es',
            dayMaxEvents: false, // allow "more" link when too many events
            events: {
              url: 'http://api-visita.xpertik.com/festividades2.php',
              failure: function() {
                console.log("aa");
                document.getElementById('script-warning').style.display = 'block'
              },
            },
            eventColor: '#072d5a',
            eventContent: function(arg) {
                let arrayOfDomNodes = []
                // title event
                let titleEvent = document.createElement('div')
                if(arg.event._def.title) {
                  titleEvent.innerHTML = arg.event._def.title
                  titleEvent.classList = "fc-event-title fc-sticky"
                }

                // image event
                let imgEventWrap = document.createElement('div')
                if(arg.event.extendedProps.img) {
                  let imgEvent = '<img src="'+arg.event.extendedProps.img+'" width="100px">'
                  imgEventWrap.classList = "fc-event-img"
                  imgEventWrap.innerHTML = imgEvent;
                }

                arrayOfDomNodes = [ titleEvent,imgEventWrap ]

                return { domNodes: arrayOfDomNodes }
            },
        });
        calendario.render();
    </script>
</body>
</html>