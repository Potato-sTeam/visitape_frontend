<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>VisitaPe</title>
        <?php include ("codes/meta.php"); ?>
        <link rel="icon" type="image/png" href="./assets/img/logo.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
            integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./assets/css/custom.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        />
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
                    <h4>Contáctanos</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Contáctanos
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container-fluid wrap_padding" style="background-color: #eee">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="border-left">
                                    ¿Quieres más información?<small> Escríbenos</small>
                                </h4>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombres: </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellidos: </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email: </label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Teléfono: </label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lugar: </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mensaje *: </label>
                                        <textarea
                                            class="form-control"
                                            id="exampleFormControlTextarea1"
                                            rows="3"
                                        ></textarea>
                                        <small id="emailHelp" class="form-text text-muted"
                                            >Por favor escribe tu mensaje.</small
                                        >
                                    </div>
                                    <button type="submit" class="btn btn-outline-info btn-block">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="content-main-1">
                                    <h4 class="text-left">
                                        ¿Quieres se Nuestro Socio?<small> Mira este video</small>
                                    </h4>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe
                                            class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                            allowfullscreen
                                        ></iframe>
                                    </div>
                                    <p class="text-left">
                                        Lorem Ipsum es simplemente el texto de relleno de las
                                        imprentas y archivos de texto. Lorem Ipsum ha sido el texto
                                        de relleno estándar de las industrias desde el año 1500,
                                        cuando un impresor (N. del T. persona que se dedica a la
                                        imprenta) desconocido usó una galería de textos y los mezcló
                                        de tal manera que logró hacer un libro de textos especimen.
                                    </p>
                                    <button type="button" class="btb btn-block btn-lg btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Asociarse</button>
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
                                                        <button type="submit" class="btn btn-outline-info btn-block" data-dismiss="modal">Enviar Mensaje</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
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
        <script>
            window.jQuery ||
                document.write(
                    '<script src="./assets/js/query.slim.min.js"><\/script>'
                );
        </script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>
