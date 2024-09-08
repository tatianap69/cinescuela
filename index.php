<?php
// función para traer los datos del JSON
function fetch_data($url)
{
    return json_decode(file_get_contents($url), true);
}
// Establecer zona horaria y obtener el mes actual
date_default_timezone_set('America/Bogota');
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
$mes = $meses[date('n') - 1];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Prueba </title>
    <link rel="stylesheet" href="src/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@300&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="src/js/main.js" defer></script>
</head>

<body>
    <header>
        <nav id="menu-superior">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M10 12h4v4h-4z" />
                </svg>
                <span> Inicio</span>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                    <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                </svg>
                <span> Nuestro catálogo</span>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M5 8h4" />
                    <path d="M9 16h4" />
                    <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                    <path d="M14 9l4 -1" />
                    <path d="M16 16l3.923 -.98" />
                </svg>
                <span> Ciclos</span>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                </svg>
                <span> Acompañamientos pedagógicos</span>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-star" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M21 12a9 9 0 1 0 -9.968 8.948" />
                    <path d="M3.6 9h16.8" />
                    <path d="M3.6 15h6.4" />
                    <path d="M11.5 3a17.001 17.001 0 0 0 -1.886 13.802" />
                    <path d="M12.5 3a16.982 16.982 0 0 1 2.549 8.01" />
                    <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                </svg>
                <span> Actualidad y educación</span>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                </svg>
            </a>
            <a href="#" class="btn btn-success">Obtener Cinescuela</a>
            <a href="#" class="btn btn-secondary">Iniciar sesión</a>
        </nav>
    </header>
    <main>
        <div class="container-fluid p-0 mt-3">
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php

                    $data_img = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/cinescuela-slprin/');

                    $activo = 'active';
                    foreach ($data_img as $item) {
                        echo '<div class="carousel-item ' . $activo . '">
                        <img src="' . $item['acf']['imagen_slide'] . '" class="d-block w-100" alt="carrusel">
                        <div class="carousel-caption d-none d-md-block">
                        <span>' . $item['title']['rendered'] . '</span>
                        <br><button class="btn btn-success">Saber más</button>
                        </div>
                        </div>';
                        $activo = '';
                    }
                    ?>
                </div>
            </div>
        </div>
        <section id="informacion">
            <div id="informacion-texto">
                <?php
                $data_info = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/pages/');

                echo $data_info[0]['excerpt']['rendered'];
                ?>
            </div>

            <div id="informacion-contenedor">
                <div class="info-item">
                    <p class="numero"><?= $data_info[5]['acf']['numero_peliculas']; ?></p>

                    <p class="palabra">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-movie" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M8 4l0 16" />
                            <path d="M16 4l0 16" />
                            <path d="M4 8l4 0" />
                            <path d="M4 16l4 0" />
                            <path d="M4 12l16 0" />
                            <path d="M16 8l4 0" />
                            <path d="M16 16l4 0" />
                        </svg>
                        <?= $data_info[5]['acf']['palabra_1_banner']; ?>
                    </p>
                </div>

                <div class="info-item">
                    <p class="numero"><?= $data_info[5]['acf']['numero_recursos_pedagogicos']; ?></p>
                    <p class="palabra">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
                            <path d="M10 12l4 0" />
                        </svg>
                        <?= $data_info[5]['acf']['palabra_2_banner']; ?>
                    </p>
                </div>

                <div class="info-item">
                    <p class="numero"><?= $data_info[5]['acf']['numero_bibliotecas']; ?></p>
                    <p class="palabra">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                            <path d="M3 6l0 13" />
                            <path d="M12 6l0 13" />
                            <path d="M21 6l0 13" />
                        </svg>
                        <?= $data_info[5]['acf']['palabra_3_banner']; ?>
                    </p>
                </div>

                <div class="info-item">
                    <p class="numero"><?= $data_info[5]['acf']['numero_de_ciudades_banner']; ?></p>
                    <p class="palabra">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                        <?= $data_info[5]['acf']['palabra_4_banner']; ?>
                    </p>
                </div>
            </div>
            <a href="#" class="btn btn-success">¿CÓMO OBTENER CINESCUELA EN TU INSTITUCIÓN EDUCATIVA?</a>
        </section>
        <section id="peliculas" class="container">
            <div class="titulo">
                <h2>Películas en <?= $mes ?></h2>
            </div>
            <div id="peliculas-mes">
                <?php

                $peliculas = $data_info[5]['acf']['peliculas_del_mes'];
                foreach ($peliculas as $pelicula) {
                    $data_movie = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/cinescuela-movies/' . $pelicula);
                    echo '<a href="#"><img src="' . $data_movie['acf']['afiche'] . '" alt="Afiche película"></a>';
                }
                ?>
            </div>
        </section>
        <section class="container">
            <div class="titulo">
                <h2>Conoce el ciclo en <?= $mes ?></h2>
            </div>
            <div id="ciclo">
                <?php
                $data_ciclo = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/cinescuela-ciclo/');

                foreach ($data_ciclo as $ciclo) {
                    echo '<a href="#">
                    <img src="' . $ciclo['acf']['imagen_principal_el_ciclo'] . '">
                    <div class="info">
                    <h3>' . $ciclo['title']['rendered'] . '</h3>
                    <span>' . $ciclo['acf']['mes_del_ciclo'] . ' ' . $ciclo['acf']['ano_del_ciclo'] . '</span>
                    <p>' . $ciclo['acf']['descripcion_corta_del_ciclo'] . '</p>
                    </div>
                    </a>';
                    break;
                }
                ?>
            </div>
        </section>
        <section class="container">
            <div class="titulo">
                <h2>Novedades</h2>
            </div>
            <div id="novedades">
                <?php
                $data_novedad1 = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/posts/22027');
                $data_novedad2 = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/posts/22029');
                $data_novedad3 = fetch_data('https://webadmin.cinescuela.org/wp-json/wp/v2/posts/22031');
                echo '
                <a href="#">
                <img src="' . $data_novedad1['acf']['imagen'] . '" alt="novedad 1">
                <span>' . $data_novedad1['title']['rendered'] . '</span>
                </a>
                <a href="#">
                <img src="' . $data_novedad2['acf']['imagen'] . '" alt="novedad 2">
                <span>' . $data_novedad2['title']['rendered'] . '</span>
                </a>
                <a href="#">
                <img src="' . $data_novedad3['acf']['imagen'] . '" alt="novedad 3">
                <span>' . $data_novedad3['title']['rendered'] . '</span>
                </a>';
                ?>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">

        </div>
        <div class="copy">
            <h5>Copyright</h5>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</html>