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
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="cercadeti.php"?"active":"");?>" aria-current="page" href="cercadeti.php"><i class="fas fa-street-view"></i> Cerca de ti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="festividades.php"?"active":"");?>" href="festividades.php"><i class="fas fa-hat-cowboy"></i> Festividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="tuexperiencia.php"?"active":"");?>" href="tuexperiencia.php"><i class="fas fa-hiking"></i> Tu Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])=="contacto.php"?"active":"");?>" href="contacto.php"><i class="fas fa-id-badge"></i> Contacto</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>-->
                </ul>
            </div>
        </nav>
    </div>
</header>