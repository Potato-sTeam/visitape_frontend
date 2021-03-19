<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisitaPe</title>
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
    <link href='./assets/css/fullcalendar/main.css' rel='stylesheet' />
</head>
<body>
    <a class="arrow-up" id="back_top">
        <i class="fa fa-arrow-up"></i>
    </a>
    <div class="dashboard-content">
    <?php include ("codes/header.php"); ?>
        <!-------------Maintop-------------->
        <section class="content-wrap">
            <div class="container-fluid breadcrumb-ini">
                <h4>Festividades</h4>
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
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
        <?php include ("codes/footer.php"); ?>
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
              url: 'http://api-visita.xpertik.com/festividades.php',
              failure: function() {
                console.log("aa");
                document.getElementById('script-warning').style.display = 'block'
              },
            },
            eventColor: '#fff',
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