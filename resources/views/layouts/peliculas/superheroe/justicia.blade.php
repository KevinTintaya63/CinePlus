<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justyce League</title>


    <style>
        :root {
            --rojo: #E50914;
            --fondo: #141414;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--fondo);
            font-family: 'Open Sans', sans-serif;
        }

        .contenedor {
            width: 90%;
            margin: auto;
        }

        header {
            padding: 30px 0;
        }

        header .contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logotipo {
            font-family: 'Bebas Neue', cursive;
            font-weight: normal;
            color: var(--rojo);
            font-size: 40px;
        }

        header nav a {
            color: #AAA;
            text-decoration: none;
            margin-right: 20px;
        }

        header nav a:hover,
        header nav a.activo {
            color: #FFF;
        }

        /* ---- ----- ----- Pelicula Principal ----- ----- ----- */
        .pelicula-principal {
            font-size: 16px;
            min-height: 40.62em;
            color: #fff;
            background: linear-gradient(rgb(82, 82, 82) 0%, rgba(0, 0, 0, .50) 40%), url('https://i0.wp.com/cinemedios.com/wp-content/uploads/2020/05/snyder-cut-liga-de-la-justicia-posters-oficiales.jpg?fit=1200%2C675&ssl=1');
            background-position: center center;
            background-size: cover;
            margin-bottom: 3.12em;
            display: flex;
            align-items: end;
        }

        .pelicula-principal .contenedor {
            margin: 0 auto;
            margin-bottom: 6.25em;
        }

        .pelicula-principal .titulo {
            font-weight: 600;
            font-size: 3.12em;
            margin-bottom: 0.4em;
        }

        .pelicula-principal .descripcion {
            font-weight: normal;
            font-size: 20px;
            line-height: 1.75em;
            max-width: 60%;
            margin-bottom: 1.25em;
        }

        .pelicula-principal .boton {
            background: rgba(9, 9, 9, 0.5);
            border: none;
            border-radius: 0.31em;
            padding: 0.93em 1.87em;
            color: #fff;
            margin-right: 1.25em;
            cursor: pointer;
            transition: .3s ease all;
            font-size: 1.12em;
        }

        .pelicula-principal .boton:hover {
            background: rgb(82, 82, 82);
            color: #fff;
        }

        .boton-salir {
            background-color: #9C0001;
            display: flex;
            font-Size: 15px;
            color: white;
            padding: 5px 15px;
            border-radius: 10px;
            border: 0.5px solid transparent;
        }

        .boton-salir:hover {
            background-color: #6b0202;
            cursor: pointer;
        }

        .pelicula-principal .boton i {
            margin-right: 1.25em;
        }

        /* ---- ----- ----- Contenedor Titulo y Controles ----- ----- ----- */
        .contenedor-titulo-controles {
            display: flex;
            justify-content: space-between;
            align-items: end;
        }

        .contenedor-titulo-controles h3 {
            color: #fff;
            font-size: 30px;
        }

        .contenedor-titulo-controles .indicadores button {
            background: #fff;
            height: 3px;
            width: 10px;
            cursor: pointer;
            border: none;
            margin-right: 2px;
        }

        .contenedor-titulo-controles .indicadores button:hover,
        .contenedor-titulo-controles .indicadores button.activo {
            background: red;
        }


        /* ---- ----- ----- Contenedor Principal y Flechas ----- ----- ----- */
        .peliculas-recomendadas {
            margin-bottom: 70px;
        }

        .peliculas-recomendadas .contenedor-principal {
            display: flex;
            align-items: center;
            position: relative;
        }

        .peliculas-recomendadas .contenedor-principal .flecha-izquierda,
        .peliculas-recomendadas .contenedor-principal .flecha-derecha {
            position: absolute;
            border: none;
            background: rgba(0, 0, 0, 0.3);
            font-size: 40px;
            height: 50%;
            top: calc(50% - 25%);
            line-height: 40px;
            width: 50px;
            color: #fff;
            cursor: pointer;
            z-index: 500;
            transition: .2s ease all;
        }

        .peliculas-recomendadas .contenedor-principal .flecha-izquierda:hover,
        .peliculas-recomendadas .contenedor-principal .flecha-derecha:hover {
            background: rgba(0, 0, 0, .9);
        }

        .peliculas-recomendadas .contenedor-principal .flecha-izquierda {
            left: 0;
        }

        .peliculas-recomendadas .contenedor-principal .flecha-derecha {
            right: 0;
        }

        /* ---- ----- ----- Carousel ----- ----- ----- */
        .peliculas-recomendadas .contenedor-carousel {
            width: 100%;
            padding: 20px 0;
            overflow: hidden;
            scroll-behavior: smooth;
        }

        .peliculas-recomendadas .contenedor-carousel .carousel {
            display: flex;
            flex-wrap: nowrap;
        }

        .peliculas-recomendadas .contenedor-carousel .carousel .pelicula {
            min-width: 20%;
            transition: .3s ease all;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);
        }

        .peliculas-recomendadas .contenedor-carousel .carousel .pelicula.hover {
            transform: scale(1.2);
            transform-origin: center;
        }

        .peliculas-recomendadas .contenedor-carousel .carousel .pelicula img {
            width: 100%;
            vertical-align: top;
        }

        /* ---- ----- ----- Media Queries ----- ----- ----- */
        @media screen and (max-width: 800px) {
            header .logotipo {
                margin-bottom: 10px;
                font-size: 30px;
            }

            header .contenedor {
                flex-direction: column;
                text-align: center;
            }

            .pelicula-principal {
                font-size: 14px;
            }

            .pelicula-principal .descripcion {
                max-width: 100%;
            }

            .peliculas-recomendadas .contenedor-carousel {
                overflow: visible;
            }

            .peliculas-recomendadas .contenedor-carousel .carousel {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .peliculas-recomendadas .indicadores,
            .peliculas-recomendadas .flecha-izquierda,
            .peliculas-recomendadas .flecha-derecha {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header style="display: flex; align-items: center">
        <div class="contenedor">
            <h2 class="logotipo">CINE +</h2>
            <nav style="display: flex">
                <a href="{{ route('inicio') }}" class="activo">Inicio</a>
                <a href="{{ route('inicio') }}">Películas</a>
                <a href="{{ route('contacto') }}">Contacto</a>
                <div style="display: flex;">
                    <a>Bienvenido @auth {{ Auth::user()->name }} @endauth
                    </a>
                    <a href="{{ route('logout') }}"><button type="button" class="boton-salir">Salir</button></a>
                </div>
            </nav>
        </div>
    </header>
    <section id="top">
        <main>
            <div class="pelicula-principal">
                <div class="contenedor">
                    <h3 class="titulo">Justice League</h3>
                    <p class="descripcion">
                        Con la determinación de asegurar que el sacrificio definitivo de Superman (Henry Cavill) no fue
                        en vano, Bruce Wayne (Ben Affleck) une fuerzas con Diana Prince (Gal Gadot) para reclutar a un
                        equipo de metahumanos que protejan el mundo de una amenaza inminente de proporciones
                        catastróficas. La tarea es más difícil de lo que Bruce imaginaba, ya que cada uno de los
                        reclutas deberá enfrentarse a sus propios demonios para trascender aquello que los detenía, para
                        unirse y formar de manera definitiva una liga de héroes sin precedentes. Ahora unidos, Batman,
                        la Mujer Maravilla, Aquaman (Jason Momoa), Cyborg (Ray Fisher) y Flash (Ezra Miller) deberán
                        salvar al planeta de la amenaza de Steppenwolf, DeSaad y Darkseid, antes de que sea demasiado
                        tarde.
                    </p>
                    <a href="https://www.youtube.com/watch?v=fp_milOcghU" alt="Mythrill" target="_blank"><button
                            role="button" class="boton">Trailer</button></a>
                    <a href="https://www.hbomax.com/pe/es" alt="Mythrill" target="_blank"><button role="button"
                            class="boton">HBO Max</button></a>
                    <a href="https://www.disneyplus.com/es-419/login" alt="Mythrill" target="_blank"><button
                            role="button" class="boton">Disney Plus</button></a>

                    <a href="https://www.imdb.com/title/tt12361974/?ref_=nv_sr_srsg_3_tt_8_nm_0_q_liga%2520de%2520la%2520justicia"
                        alt="Mythrill" target="_blank"><button role="button" class="boton">Más información</button></a>
                </div>
            </div>
        </main>
    </section>
    <div style="display: flex; justify-content: center; flex-direction: row; align-items: center">
        <h3 style="display: flex ;color: white; justify-content: center; font-size:120px;margin-right: 20px">
            Calificacion:</h3>
        <h3 style="color: rgb(255, 247, 0); font-size:100px;display: flex; justify-content: center">★★★★★</h3>
    </div>
</body>

</html>
