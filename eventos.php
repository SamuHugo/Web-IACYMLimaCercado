<?php
    include_once 'connection.php';

    $sql = 'SELECT * FROM iglesia_events';
    $sentencia = $pdoev->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Hugo">
    <meta name="description"
        content="Somos la Iglesia Alianza Cristiana y Misionera de Lima Cercado, en Lima Perú. ¡Bienvenidos a nuestra página!">
    <meta name="keywords"
        content="iglesia lima cercado, iacym lima cercado, iglesia alianza lima cercado, iacym perú, iacym peru">
    <title>Eventos | IACyM Lima cercado</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages/events.css">
    <script src="https://kit.fontawesome.com/9541643713.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <!--#### HEADER/NAV ####-->
        <div class="container-header">
            <header id="nav" class="header-nav">
                <a class="container-logo" href="inicio.html">
                    <div id="logo-nav" class="nav-logo"></div>
                </a>
        
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar"><i class="fa-solid fa-bars"></i></label>
                <nav>
                    <ul id="links" class="nav-list">
                        <li><a class="btn-nav" href="inicio.html">INICIO<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="servicio-podcast.html">Podcasts</a></li>
                                <li><a href="app-iacym-peru.html">APP Iacym Perú</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="servicio-online.html">EN LÍNEA</a></li>
                        <li><a class="btn-nav" href="redes.html">REDES<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="red-zona-kids.html">
                                    <span class="children-filter-zona">ZONA</span>
                                    <span class="children-filter-k">K</span><span class="children-filter-i">I</span><span class="children-filter-d">D</span><span class="children-filter-s">S</span>
                                </a></li>
                                <li><a href="red-rescatados.html">Rescatados</a></li>
                                <li><a href="red-generacion-vertical.html">Generación Vertical</a></li>
                                <li><a href="red-generaxion.html">Generaxion</a></li>
                                <li><a href="red-varones.html">Red de Varones</a></li>
                                <li><a href="red-damas.html">Red de Damas</a></li>
                                <li><a href="red-unidos.html">Unidos</a></li>
                                <li><a href="red-shajah.html">Shajah</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="ministerios.html">Ministerios<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="anfitriones-compasion.html">Anfitriones y compasión</a></li>
                                <li><a href="alabanza-adoracion-artes-comunicaciones.html">Alabanza, Adoración, Artes y Comunicaciones</a></li>
                                <li><a href="evangelismo-misiones.html">Evangelismo y Misiones</a></li>
                                <li><a href="medicos-rafa.html">Medicos "Rafa"</a></li>
                                <li><a href="mec.html">Ministerio de Educación Cristiana</a></li>
                                <li><a href="personas-discapacidad.html">Personas con Discapacidad</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="vida-iglesia.html">IGLESIA<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="grupo-de-vida.html">Grupos de Vida</a></li>
                                <li><a href="tu-primer-paso.html">¿Eres Nuevo?</a></li>
                                <li><a href="peticiones.html">Oración</a></li>
                                <li><a href="donativos.html">Donativos</a></li>
                                <li><a href="contactanos.html">Contáctanos</a></li>
                                <li><a href="nuestra-iglesia.html">Nuestra Iglesia</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav nav-active" href="cursos-biblicos.html">CURSOS BIBLÍCOS</a></li>
                        <li><a class="btn-nav" href="eventos.php">EVENTOS</a></li>
                        <li><a class="btn-nav" href="media.php">MEDIA<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="media-dominicales.php">Cultos Dominicales</a></li>
                                <li><a href="media-matutinos.php">Cultos Matutinos</a></li>
                                <li><a href="media-devocionales.php">Devocionales</a></li>
                                <li><a href="media-congresos.php">Congresos</a></li>
                                <li><a href="media-eventos.php">Eventos</a></li>
                                <li><a href="media-obras-teatrales.php">Obras Teatrales</a></li>
                                <li><a href="media-ensamble.php">Ensamble</a></li>
                                <li><a href="media-redjuvenil.php">Red Juvenil</a></li>
                                <li><a href="media-playlist.html">Playlist</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>

        <!--##### Events #####-->
        <div class="container__events">
            <div class="heading__events">
                <h1 class="elementor-heading-title">NOTICIAS Y EVENTOS DE NUESTRA IGLESIA</h1>
            </div>
            <div class="content__events">
                <div class="container__box-events">
                    <?php 
                        $sql_events_1 = 'SELECT * FROM iglesia_events where id=1';
                        $sql_events_2 = 'SELECT * FROM iglesia_events where id in (2,3,4,5,6,7)';
                        $sentencia_events_1 = $pdoev->prepare($sql_events_1);
                        $sentencia_events_2 = $pdoev->prepare($sql_events_2);
                        $sentencia_events_1->execute();
                        $sentencia_events_2->execute();

                        $resultado_events_1 = $sentencia_events_1->fetchAll();
                        $resultado_events_2 = $sentencia_events_2->fetchAll();
                    ?>

                    <?php foreach($resultado_events_1 as $events_1): ?>
                            <div class="box-events-superior">
                                <div class="img-events">
                                    <img src="<?php echo $events_1['img-event'] ?>" alt="events-image">
                                </div>
                            </div>
                    <?php endforeach ?>

                    <div class="box-events-principal">
                        <div class="img-events">
                            <img src="img/base/img-default.png" alt="events-image">
                            <h1 class="elementor-heading-title">Title Events</h1>
                        </div>
                    </div>

                    <div class="box-events-principal">
                        <div class="img-events">
                            <img src="img/base/img-default.png" alt="events-image">
                            <h1 class="elementor-heading-title">Title Events</h1>
                        </div>
                    </div>

                    <?php foreach($resultado_events_2 as $events_2): ?>
                            <div class="box-events">
                                <div class="img-events"><img src="<?php echo $events_2['img-event'] ?>" alt="events-image"></div>
                            </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <!--##### AD-APP #####-->
        <div class="container__ad-app">
            <section class="section__ad-app">
                <h1 class="elementor-heading-title">¡DESCARGA LA APP IACYM PERÚ!</h1>
                <p class="elementor-p">Ponemos a tu alcance el nuevo aplicativo de IACYM PERÚ</p>
            </section>
            <div class="content__ad-app">
                <div class="content-box">
                    <div class="cover-phone-app"></div>
                </div>
                <div class="content-box">
                    <p class="elementor-p">Aquí podrás tener acceso a devocionales, prédicas y materiales importantes para nuestro crecimiento en nuestra vida cristiana.</p>
                    <div class="container__box-app">
                        <div class="box-app"><a href="https://play.google.com/store/apps/details?id=com.app1234" target="_blank"><img src="img/base/android-badge.svg" alt="play store app"></a></div>
                        <div class="box-app"><a href="https://apps.apple.com/pe/app/iacym-per%C3%BA/id1497357780" target="_blank"><img src="img/base/apple-badge.svg" alt="app store app"></a></div>
                        <div class="box-app"><a href="https://apps.apple.com/pe/app/iacym-per%C3%BA/id1497357780" target="_blank"><img src="img/base/huawei-badge.png" alt="app gallery app"></a></div>
                    </div>
                </div>
                <div class="content-box">
                    <div class="cover-phone-app"></div>
                </div>
            </div>
        </div>

        <!--##### FOOTER #####-->
        <div class="container__footer">
            <footer class="content__footer">
                <div class="container__footer-box">

                    <div class="footer-box">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo/LOGO IACYM LC-DARK.png" alt="logo"></a>
                        </div>
                        <p class="footer-description">"Bendiciendo a las familias de la tierra".</p>
                    </div>

                    <div class="footer-box">
                        <h2 class="footer-title">IGLESIA</h2>
                        <div class="footer-shortcuts">
                            <a href="redes.html" class="footer-link">Redes</a>
                            <a href="bible-academy.html" class="footer-link">Academia Biblíca</a>
                            <a href="gdv.html" class="footer-link">Únete a una GDV</a>
                            <a href="oración.html" class="footer-link">¿Necesitas Oración?</a>
                            <a href="events.html" class="footer-link">Eventos</a>
                        </div>
                    </div>

                    <div class="footer-box">
                        <h2 class="footer-title">CONTÁCTANOS</h2>
                        <div class="footer-shortcuts">
                            <a href="" class="footer-link">(+51)000 0000</a>
                            <a href="#" class="footer-link">999 999 999</a>
                            <a href="#" class="footer-link">iacym.limacercado@gmail.com</a>
                            <a href="#" class="footer-link">Av. Aurelio Garcia y Garcia 1519 </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container__footer-bottom">
                    <div class="footer-bottom-box">
                        <p class="footer-bottom-info">Desarrollado por Ministerio de Informática</p>
                        <p class="footer-bottom-copyright">&copy; 2023 <span>IACyM LIMA CERCADO</span> - Todos los Derechos Reservados</p>
                    </div>
                    <div class="footer-bottom-box">
                        <div class="footer-social">
                            <h2 class="footer-bottom-title">SÍGUENOS</h2>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-facebook-f footer-social-icon"></i></a>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-instagram footer-social-icon"></i></a>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-youtube footer-social-icon"></i></a>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-spotify footer-social-icon"></i></a>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-android footer-social-icon"></i></a>
                            <a href="#" class="footer-social-icon"><i class="fa-brands fa-apple footer-social-icon"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <script src="js/jquery.js"></script>
    <script src="js/filter-bible-academy.js"></script>
</body>

</html>