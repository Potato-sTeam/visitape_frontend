<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VisitaPe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <section class="content-wrap">
            <div class="container-fluid breadcrumb-ini" id="text-h">
                <h4>Tu Experiencia</h4>
                <div class="row">
                    <div class="col-md-12">
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Tu Experiencia</li>
                         </ol>
                     </nav>
                    </div>
                </div>
            </div>
            <div class="container-fluid wrap_padding" style="background-color: #eee;" id="contenido-exp">
                <!-------------Main Content 2-------------->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 main-content-2" id="text">
                            <h3>Testimonios</h3>
                            <div class="wraped-scroll">
                                <div class="content-comment">
                                    <div class="Muigrig-rood">
                                        <ul class="js01" id="comentario">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 main-content-2" id="text">
                            <h3>Tu experiencia es Importante</h3>
                            <form action="tuexperiencia" method="POST" action="#">
                                <div class="coment">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Escribe tu Experiencia"></textarea>
                                </div>
                                <div class="text-center">
                                    <button id="enviar" type="submit" class="btn btn-warning">Enviar</button>
                                </div>
                            </form>
                                <h4>Escribe tu Sugerencia ㋡</h4>
                                <form action="tuexperiencia" method="POST" action="#">
                                <div class="sug">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Escribe tu Sugerencia"></textarea>
                                </div>
                                <div class="text-center">
                                    <button id="env" type="submit" class="btn btn-warning">Enviar</button>
                                </div>
                            </form>
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
    <script tipe="text/javascript" src="assets/js/api_exp.js"></script>
</body>
</html>