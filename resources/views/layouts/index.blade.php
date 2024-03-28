<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <title>CINE +</title>
</head>
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
        background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0, 0, 0, .50) 40%), url('https://cdn.discordapp.com/attachments/864577245905551391/1098473015274131546/cGc.png');
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
        font-size: 1em;
        line-height: 1.75em;
        max-width: 50%;
        margin-bottom: 1.25em;
    }

    .pelicula-principal .boton {
        background: rgba(0, 0, 0, 0.5);
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
        background: #fff;
        color: #000;
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
<style>
    /* Estilos del scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    /* Track (el fondo del scrollbar) */
    ::-webkit-scrollbar-track {
        background-color: #141414;
    }

    /* Thumb (la barra del scrollbar) */
    ::-webkit-scrollbar-thumb {
        background-color: #E50914;
        border-radius: 4px;
    }

    /* Hover en el thumb */
    ::-webkit-scrollbar-thumb:hover {
        background-color: #E50914;
    }
</style>
{{-- Diseño card --}}
<style>
    :root {
        --card-height: 300px;
        --card-width: calc(var(--card-height) / 1.5);
    }

    * {
        box-sizing: border-box;
    }

    .card {
        width: 270px;
        height: 80px;
        position: relative;
        display: flex;
        justify-content: center;
        margin-top: 20px
    }

    .cover-image {
        width: 270px;
        height: 157px;
        object-fit: cover;
    }

    .wrapper {
        transition: all 0.5s;
        position: absolute;
        width: 100%;
        z-index: -1;
    }

    .card:hover .wrapper {
        transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
        box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
    }

    .wrapper::before,
    .wrapper::after {
        content: "";
        opacity: 0;
        width: 100%;
        height: 80px;
        transition: all 0.5s;
        position: absolute;
        left: 0;
    }

    .wrapper::before {
        top: 0;
        height: 100%;
        background-image: linear-gradient(to top,
                transparent 46%,
                rgba(12, 13, 19, 0.5) 68%,
                rgba(12, 13, 19) 97%);
    }

    .wrapper::after {
        bottom: 0;
        opacity: 1;
        background-image: linear-gradient(to bottom,
                transparent 46%,
                rgba(12, 13, 19, 0.5) 68%,
                rgba(12, 13, 19) 97%);
    }

    .card:hover .wrapper::before,
    .wrapper::after {
        opacity: 1;
    }

    .card:hover .wrapper::after {
        height: 120px;
    }

    .title {
        width: 100%;
        transition: transform 0.5s;
    }

    .card:hover .title {
        transform: translate3d(0%, -50px, 100px);
    }

    .character {
        width: 200px;
        height: 200px;
        opacity: 0;
        transition: all 0.5s;
        position: absolute;
        z-index: -1;
    }

    .card:hover .character {
        opacity: 1;
        transform: translate3d(0%, -30%, 100px);
    }
</style>

<body>
    @include('layouts.peliculas.menu')
    <section id="top">
        <main>
            <div class="pelicula-principal">
                <div class="contenedor">
                    <h3 class="titulo">Mario Bros</h3>
                    <p class="descripcion">
                        Es una película animada CGI producida por Illumination en asociación con Nintendo y distribuida
                        por
                        Universal Pictures. Es la tercera adaptación cinematográfica de la franquicia de Mario de
                        Nintendo,
                        después de la película de anime japonesa de 1986, Super Mario Bros.: ¡La gran misión para
                        rescatar a
                        la princesa Peach! y la película de acción en vivo de 1993, Super Mario Bros.
                    </p>
                    <a href="https://www.youtube.com/watch?v=_6fkvs9i_jQ" alt="Mythrill" target="_blank"><button
                            role="button" class="boton">Reproducir</button></a>

                    <a href="https://www.imdb.com/title/tt6718170/" alt="Mythrill" target="_blank"><button
                            role="button" class="boton">Más información</button></a>
                </div>
            </div>
        </main>
    </section>


    <section id="peliculas">
    @foreach ($pelicula_cat as $categoria => $peliculas)
        <div style="display: flex; justify-content: center; flex-direction: column">
            <div style="display: flex">
                <h1 style="color: white; padding-left:30px ">{{ $categoria }}</h1>
            </div>
            <div style="display: flex; flex-wrap: wrap; justify-content: center">
            @foreach ($peliculas as $pelicula)
                
                    {{-- contenedor --}}
                    <div style="display: flex; flex-direction: column; margin-right: 30px">
                        {{-- link --}}
                        <a href="{{ route('detalle_pelicula', ['id' => $pelicula->id]) }}" alt="{{ $pelicula->titulo }}" target="_blank">
                            <div class="card">
                                <div class="wrapper">
                                    {{-- img --}}
                                    @if ($pelicula->img_first)
                                        <img src="{{ asset('storage/images/' . basename($pelicula->img_first)) }}" class="cover-image" />
                                    @else
                                        <p>No hay imagen disponible 1</p>
                                    @endif
                                </div>
                                {{-- png cuerpo --}}
                                @if ($pelicula->img_second)
                                    <img src="{{ asset('storage/images/' . basename($pelicula->img_second)) }}"class="character" />
                                @else
                                    <p>No hay imagen disponible 2</p>
                                @endif
                            </div>

                        </a>
                        <div style="display: flex; margin-top: 75px; justify-content: center">
                            <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                            <h3 style="color: yellow">
                            @php
                                $calificacion = $pelicula->calificacion; // Obtener la calificación de la película
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $calificacion)
                                    <span>★</span>
                                @else
                                    <span>☆</span>
                                @endif
                            @endfor</h3>
                        </div>
                    </div>
                
            @endforeach
        </div>
        </div>
    @endforeach
</section>



    



</body>

</html>
