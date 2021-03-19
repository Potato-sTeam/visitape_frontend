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
                <h4>Cerca de ti</h4>
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Cerca de ti
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background-color: #eee;">
                <div class="row">
                    <div class="col">

                        <div class="z-depth-1-half map-container" style="height: 500px">
                            <form method="POST" action="#">
                                <input
                                id="pac-input"
                                class="controls"
                                type="text"
                                placeholder="Buscar"
                            />
                            </form>
                            <div id="map"></div>
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
    <script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./assets/js/cercadeti.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgbV_v4E3iqSK2Js0Y4JTD9lxBaAbqt0&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
</body>
</html>
