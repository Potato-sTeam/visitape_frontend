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
                <div class="container-fluid wrap_padding" style="background-color: #eee;">
                    <div class="container" style="background-color: #eee;" >
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">BUSCAR</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LUGARES</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        <button type="button" id="changetabbutton" class="btn btn-outline-success btn-block">Seleccionar Ubicación</button>
                                    </div>
                                    <div class="tab-pane fade tab-padd" id="profile" role="tabpanel" aria-labelledby="profile-tab">                                       
                                        <div class="row marg-bott">
                                            <div class="col-sm-12 col md-6 col-lg-5 px-md-5">
                                                <img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2020/11/13/000726268W.jpg" class="img-fluid" alt="Huancayo">
                                            </div>
                                            <div class="col-sm-12 col md-6 col-lg-7 px-md-5">
                                                <h4 class="text-dark font-weight-bold">Huancayo</h4>
                                                <p class="text-dark">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row marg-bott">
                                            <div class="col-sm-12 col md-6 col-lg-5 px-md-5">
                                                <img src="https://elcomercio.pe/resizer/6WUQZFcpVjeMviAnUu3OQGWYqK8=/980x0/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/RD7WTBABL5DS5FMDGFFYK7UNI4.jpg" class="img-fluid" alt="Satipo">
                                            </div>
                                            <div class="col-sm-12 col md-6 col-lg-7 px-md-5">
                                                <h4 class="text-dark font-weight-bold">Satipo</h4>
                                                <p class="text-dark">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row marg-bott">
                                            <div class="col-sm-12 col md-6 col-lg-5 px-md-5">
                                                <img src="https://www.chanchamayoinnhotel.com/medias/slide/big/5/hotel-01.jpg" class="img-fluid" alt="Satipo">
                                            </div>
                                            <div class="col-sm-12 col md-6 col-lg-7 px-md-5">
                                                <h4 class="text-dark font-weight-bold">Chanchamayo</h4>
                                                <p class="text-dark">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row marg-bott">
                                            <div class="col-sm-12 col md-6 col-lg-5 px-md-5">
                                                <img src="https://i.ytimg.com/vi/YWGt0aaHsyw/maxresdefault.jpg" class="img-fluid" alt="Satipo">
                                            </div>
                                            <div class="col-sm-12 col md-6 col-lg-7 px-md-5">
                                                <h4 class="text-dark font-weight-bold">Jauja</h4>
                                                <p class="text-dark"> 
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p>
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
        <script>window.jQuery || document.write('<script src="./assets/js/query.slim.min.js"><\/script>')</script><script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="./assets/js/cercadeti.js"></script>
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgbV_v4E3iqSK2Js0Y4JTD9lxBaAbqt0&callback=initMap&libraries=places&v=weekly"
        async
        ></script>
    </body>
</html>
