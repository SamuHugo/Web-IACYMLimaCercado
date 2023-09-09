<?php
    include_once 'connection.php';

    $sqldom = 'SELECT * FROM dominicales ORDER BY id DESC LIMIT 3';
    $sentenciadom = $pdodom->prepare($sqldom);
    $sentenciadom->execute();

    $resultadodom = $sentenciadom->fetchAll();
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
    <title>Recursos | IACyM Lima cercado</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages/media.css">
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
                        <li><a class="btn-nav" href="cursos-biblicos.html">CURSOS BIBLÍCOS</a></li>
                        <li><a class="btn-nav" href="eventos.php">EVENTOS</a></li>
                        <li><a class="btn-nav nav-active" href="media.php">MEDIA<i class="fa-solid fa-angle-down i-style"></i></a>
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

        <!--BANNER-->
        <div class="container__banner">
            <div class="content__banner">
                <h1 class="elementor-heading-title title-banner">RECURSOS</h1>
                <p class="elementor-p-2 text-banner">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam, purus sit ectus magna fringilla urnaamet luctus venenatis, lectus magna fringilla urna,
                    porttitor rhoncus dolor.</p>
            </div>
        </div>

        <!--CONTAINER DOMINICALES-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">CULTOS DOMINICALES</h1>
                </div>

                <div class="container-card__resource">
                     <?php

                        $sql_dominicales = 'SELECT * FROM dominicales ORDER BY id DESC LIMIT 3';
                        $sentencia_dominicales = $pdodom->prepare($sql_dominicales);
                        $sentencia_dominicales->execute();

                        $resultado_dominicales = $sentencia_dominicales->fetchAll();

                    ?>

                    

                    <?php foreach($resultado_dominicales as $dominical): ?>
                        <div class="card">
                            <div class="card-cover">
                                <a href="<?php echo $dominical['link'] ?>" target="_blank"><img src="<?php echo $dominical['img'] ?>" alt="card-cover"></a>
                            </div>
                            <div class="card-info">
                                <h1 class="card-title"><?php echo $dominical['title'] ?></h1>
                                <p class="card-duration"><i class="fa-regular fa-clock"></i> <?php echo $dominical['hour'] ?>:<?php echo $dominical['minute'] ?>:<?php echo $dominical['second'] ?> min</p>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <div id="btn-next" class="btn-next-sl"><a href="media-dominicales.php"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-dominicales.php">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER MATUTINOS-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">CULTOS MATUTINOS</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-matutinos.php"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-matutinos.php">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER DEVOCIONAL-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">DEVOCIONALES</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-devocionales.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-devocionales.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER CONGRESOS-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">CONGRESOS</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-congresos.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-congresos.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER EVENTOS-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">EVENTOS</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-eventos.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-eventos.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER OBRAS TEATRALES-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">OBRAS TEATRALES</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-obras-teatrales.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-obras-teatrales.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER ENSAMBLE IACyM LIMA CERCADO-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">ENSAMBLE IACyM LIMA CERCADO</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-ensamble.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-ensamble.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER RED JUVENIL-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">RED JUVENIL</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-cover">
                            <img src="img/resource/card/img-default.png" alt="card-cover">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> --:--:-- min</p>
                        </div>
                    </div>

                    <div id="btn-next" class="btn-next-sl"><a href="media-redjuvenil.html"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                    <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="media-redjuvenil.html">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--CONTAINER PLAYLIST-->
        <div class="container__resource">
            <div class="content__resource">
                <div class="heading__resource">
                    <h1 class="elementor-heading-title">PLAYLIST</h1>
                </div>

                <div class="container-card__resource">
                    <div class="card">
                            <div class="card-cover">
                                <img src="https://png.pngtree.com/png-vector/20220728/ourmid/pngtree-png-music-player-background-png-image_6089907.png"
                                    alt="card-cover">
                            </div>
                            <div class="card-info">
                                <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-cover">
                                <img src="https://png.pngtree.com/png-vector/20220728/ourmid/pngtree-png-music-player-background-png-image_6089907.png"
                                    alt="card-cover">
                            </div>
                            <div class="card-info">
                                <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-cover">
                                <img src="https://png.pngtree.com/png-vector/20220728/ourmid/pngtree-png-music-player-background-png-image_6089907.png"
                                    alt="card-cover">
                            </div>
                            <div class="card-info">
                                <h1 class="card-title">¿Se Puede Recuperar El Amor En Mi Familia?</h1>
                            </div>
                        </div>

                        <div id="btn-next" class="btn-next-sl"><a href="#"><i class="fa-solid fa-angle-right slider__btn-2-woa"></i></a></div>
                        <div id="btn-next" class="btn-next-responsive"><a class="btn__secondary"  href="#">Ver más</a></div>
                </div>
            </div>
        </div>

        <!--GALERY-->
        <div class="container__gallery-photo">
            <div class="title__gallery-photo">
                <h1 class="elementor-heading-title title-gallery-photo">GALERÍA</h1>
            </div>
            <div class="content__gallery-photo">
                <div class="gallery-photo">
                    <img src="img/base/carlos-arthur-m-r-e3F0VVcsgDY-unsplash.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/edward-cisneros-KoKAXLKJwhk-unsplash.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/edward-cisneros-QSa-uv4WJ0k-unsplash.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/hannah-busing-gktFjKSWAmA-unsplash.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/hudson-hintze-vpxeE7s-my4-unsplash.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/image 48.png" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/IMG_5030.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/IMG_5031.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/IMG_5037 (1).jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/IMG_5062.jpg" alt="gallery-photo">
                </div>
                <div class="gallery-photo">
                    <img src="img/base/IMG_5924.jpg" alt="gallery-photo">
                </div>
            </div>
        </div>

        <!--FOOTER-->
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
</body>

</html>