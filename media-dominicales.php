<?php
    include_once 'connection.php';

    $sql = 'SELECT * FROM dominicales ORDER BY id DESC';
    $sentencia = $pdodom->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();


    $dominical_x_pagina = 12;

    $total_dominical_db = $sentencia->rowCount();

    $paginas = $total_dominical_db/12;
    $paginas = ceil($paginas);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Hugo">
    <meta name="description" content="Somos la Iglesia Alianza Cristiana y Misionera de Lima Cercado, en Lima Perú. ¡Bienvenidos a nuestra página!">
    <meta name="keywords" content="iglesia lima cercado, iacym lima cercado, iglesia alianza lima cercado, iacym perú, iacym peru">
    <title>Cultos Dominicales | IACyM Lima cercado</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/components/model-rsc.css">
    <link rel="stylesheet" href="css/components/nav-pagination.css">
    <script src="https://kit.fontawesome.com/9541643713.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="container-header">
            <header id="nav" class="nav-blank">
                <a class="container-logo" href="index.html">
                    <div id="logo-nav" class="nav-logo-dark"></div>
                </a>
        
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar"><i class="fa-solid fa-bars"></i></label>
                <nav>
                    <ul id="links" class="nav-list">
                        <li><a class="btn-nav nav-active" href="index.html">INICIO<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="so-podcast.html">Podcast</a></li>
                                <li><a href="app-iacym-peru.html">APP Iacym Perú</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="service_online.html">EN LÍNEA</a></li>
                        <li><a class="btn-nav" href="redes.html">REDES<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="red-childen.html">
                                    <span class="children-filter-zona">ZONA</span>
                                    <span class="children-filter-k">K</span><span class="children-filter-i">I</span><span class="children-filter-d">D</span><span class="children-filter-s">S</span>
                                </a></li>
                                <li><a href="red-r2.html">Rescatados</a></li>
                                <li><a href="red-gv.html">Generación Vertical</a></li>
                                <li><a href="gx.html">Generaxion</a></li>
                                <li><a href="red-varones.html">Red de Varones</a></li>
                                <li><a href="red-damas.html">Red de Damas</a></li>
                                <li><a href="red-unidos.html">Unidos</a></li>
                                <li><a href="red-shajah.html">Shajah</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="ministerios.html">Ministerios<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="red-r2.html">Servicio (Anfitriones y compasión)</a></li>
                                <li><a href="red-gv.html">Alabanza, Adoración, Artes y Comunicaciones</a></li>
                                <li><a href="gx.html">Evangelismo y Misiones</a></li>
                                <li><a href="red-varones.html">Medicos "Rafa"</a></li>
                                <li><a href="red-damas.html">Ministerio de Educación Cristiana</a></li>
                                <li><a href="red-unidos.html">Personas con Discapacidad</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="vida_iglesia.html">IGLESIA<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="gdv.html">Grupos de Vida</a></li>
                                <li><a href="bible-academy.html">Contáctanos</a></li>
                                <li><a href="bible-academy.html">Nuestra Iglesia</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="bible-academy.html">CURSOS BIBLÍCOS</a></li>
                        <li><a class="btn-nav" href="events.html">EVENTOS</a></li>
                        <li><a class="btn-nav" href="resources.html">MEDIA<i class="fa-solid fa-angle-down i-style"></i></a>
                            <ul class="nav-sub-list">
                                <li><a href="resources-dominicales.html">Cultos Dominicales</a></li>
                                <li><a href="resources-matutinos.html">Cultos Matutinos</a></li>
                                <li><a href="resources-devocionales.html">Devocionales</a></li>
                                <li><a href="resources-congresos.hmtl">Congresos</a></li>
                                <li><a href="resources-events.html">Eventos</a></li>
                                <li><a href="resources-obras-teatrales.html">Obras Teatrales</a></li>
                                <li><a href="resources-esamble.html">Ensamble</a></li>
                                <li><a href="resources-red-juvenil.html">Red Juvenil</a></li>
                                <li><a href="resources-playlist.html">Playlist</a></li>
                            </ul>
                        </li>
                        <li><a class="btn-nav" href="about-us.html">NOSOSTROS</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="container__rsc">
            <div class="content__rsc">
                <div class="heading__rsc">
                    <h1 class="elementor-fn-jost-xbl">CULTOS DOMINICALES</h1>
                </div>
                <div class="container-card__rsc">
                
                    <?php 
                        if(!$_GET) {
                            header('Location:media-dominicales.php?pagina=1');
                        }

                        if(!$_GET['pagina']>$paginas || $_GET['pagina']<0) {
                            header('Location:media-dominicales.php?pagina=1');
                        }

                        $iniciar = ($_GET['pagina']-1)*$dominical_x_pagina;
                        //echo $iniciar;

                        $sql_dominicales = 'SELECT * FROM dominicales ORDER BY id DESC LIMIT :ini, :domi';
                        $sentencia_dominicales = $pdodom->prepare($sql_dominicales);
                        $sentencia_dominicales->bindParam(':ini', $iniciar, PDO::PARAM_INT);
                        $sentencia_dominicales->bindParam(':domi', $dominical_x_pagina, PDO::PARAM_INT);
                        $sentencia_dominicales->execute();

                        $resultado_dominicales = $sentencia_dominicales->fetchAll();

                    ?>

                    <?php foreach($resultado_dominicales as $dominical): ?>
                    <div class="card">
                        <div class="card-cover">
                            <a href="<?php echo $dominical['link'] ?>"><img src="<?php echo $dominical['img'] ?>" alt="card-cover"></a>
                        </div>
                        <div class="card-info">
                            <h1 class="card-title"><?php echo $dominical['title'] ?></h1>
                            <p class="card-duration"><i class="fa-regular fa-clock"></i> <?php echo $dominical['hour'] ?>:<?php echo $dominical['minute'] ?>:<?php echo $dominical['second'] ?> min</p>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
                <nav class="nav-pagination">
                        <ul class="list-page-item">
                            <li class="page-item <?php echo $_GET['paginas']<=1? '.disable' : '' ?>">
                                <a class="page-link" href="media-dominicales.php?pagina=<?php echo $_GET['pagina']-1 ?>"><</a>
                            </li>
                            
                            <?php for($i=0; $i<$paginas; $i++): ?>
                                <li class="page-item <?php echo $_GET['paginas']==$i+1 ? '.active' : '' ?>"><a class="page-link" href="media-dominicales.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>
                            <?php endfor ?>

                            <li class="page-item <?php echo $_GET['paginas']>=$paginas? '.disable' : '' ?>">
                                <a class="page-link" href="media-dominicales.php?pagina=<?php echo $_GET['pagina']+1 ?>">></a>
                            </li>
                        </ul>
                    </nav>
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
                            <a href="oracion.html" class="footer-link">¿Necesitas Oración?</a>
                            <a href="gdv.html" class="footer-link">Únete a una GDV</a>
                            <a href="bible-academy.html" class="footer-link">Cursos Biblicos</a>
                            <a href="redes.html" class="footer-link">Redes</a>    
                            <a href="events.html" class="footer-link">Eventos</a>
                        </div>
                    </div>

                    <div class="footer-box">
                        <h2 class="footer-title">CONTÁCTANOS</h2>
                        <div class="footer-shortcuts">
                            <a href="" class="footer-link">(01) 564 5918</a>
                            <a href="#" class="footer-link">999 999 999</a>
                            <a href="#" class="footer-link">iacymlimacercado@gmail.com</a>
                            <a href="#" class="footer-link">Av. Aurelio Garcia y Garcia 1519 - Cipreses, Lima, Peru</a>
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