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
    <header style="display: flex; align-items: center">
        <div class="contenedor">
            <h2 class="logotipo">CINE +</h2>
            <nav style="display: flex">
                <a href="{{ route('inicio') }}" class="activo">Inicio</a>
                <a href="#peliculas">Películas</a>
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
    {{-- 2022 --}}
    <section id="peliculas">
        <div style="display: flex; justify-content: center; flex-direction: column">
            <div style="display: flex">
                <h1 style="color: white; padding-left:30px;font-size: 2em ">Peliculas del 2022</h1>
            </div>
            {{-- Pelis --}}
            <div style="display: flex; flex-wrap: wrap; justify-content: center">
                {{-- contenedor 1 everything --}}
                <div style="display: flex; flex-direction: column; margin-right: 30px">
                    {{-- link --}}
                    <a href="{{ route('everything') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://q9c3t4p4.rocketcdn.me/wp-content/uploads/2023/03/Everything-Everywhere-All-At-Once-Cast-Showtime-Every-Actor-Character.jpeg"
                                    class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098823578906013726/image.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★★★★</h3>
                    </div>
                </div>
                {{-- contenedor 2 Batman --}}
                <div style="display: flex; flex-direction: column; margin-right: 30px">
                    {{-- link --}}
                    <a href="{{ route('batman2022') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://fictionhorizon.com/wp-content/uploads/2022/02/B61F41AD-6007-4197-8A34-3D456E8AD4CC-1024x538.jpeg"
                                    class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098825101228658688/image.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★★☆☆</h3>
                    </div>
                </div>
                {{-- contenedor 3 Elvis --}}
                <div style="display: flex; flex-direction: column; margin-right: 30px">
                    {{-- link --}}
                    <a href="{{ route('elvis') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://www.elvismovie.net/images/share.jpg" class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098826176325222511/image.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★☆☆☆</h3>
                    </div>
                </div>
                {{-- contenedor 4 Avatar --}}
                <div style="display: flex; flex-direction: column; margin-right: 30px">
                    {{-- link --}}
                    <a href="{{ route('avatar') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi9DFC9P4CaXDfUwMOS5yGyEfOSGNX5xC6ylRv48xbJSZAyuqScOnU2kvY4H22Ve51w4pr2-_TaPqVWzSF_xwb78PHu32tNM7wZnsk0magTiYqupgrWewjUaUeqGQaNc6bFkaFhb1kUAM8L8h59OUh9AYRluyxXUwjeteVjq8WGp11XtcL8g1IB2G9M/s1056/AvatarElCaminoelAguaCritica.jpg"
                                    class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098827667308027904/image.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★★☆☆</h3>
                    </div>
                </div>
                {{-- contenedor 5 Topgun --}}
                <div style="display: flex; flex-direction: column; margin-right: 30px">
                    {{-- link --}}
                    <a href="{{ route('topgun') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://m.media-amazon.com/images/I/71lvUYzEe9L.jpg" class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098830717510754324/image.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★★★☆</h3>
                    </div>
                </div>
                {{-- contenedor 6 banshees --}}
                <div style="display: flex; flex-direction: column; margin-right: 0px">
                    {{-- link --}}
                    <a href="{{ route('banshees') }}" alt="Mythrill" target="_blank">
                        <div class="card">
                            <div class="wrapper">
                                {{-- img --}}
                                <img src="https://img.englishcinemakyiv.com/25MtIm57qgli8ZvghAp-9Uhaf7gxrDdBefiQmZ0jthc/resize:fill:800:450:1:0/gravity:sm/aHR0cHM6Ly9leHBhdGNpbmVtYXByb2QuYmxvYi5jb3JlLndpbmRvd3MubmV0L2ltYWdlcy82MTMwYzQyOS0zYjhiLTQwZTItYTliZC1iOGI3MzUxODIxZGMuanBn.jpg"
                                    class="cover-image" />
                            </div>
                            {{-- png cuerpo --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098828531775053824/the_banshees_of_inisherin_2022_v3dss_by_ungrateful601010_dfksfwo-fullview.png"
                                class="character" />
                        </div>

                    </a>
                    <div style="display: flex; margin-top: 75px; justify-content: center">
                        <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                        <h3 style="color: yellow">★★☆☆☆</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- COMEDIA --}}
    <div style="display: flex; justify-content: space-between; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas de Comedia</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            {{-- contenedor 1  Scott --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('scott') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://rare-gallery.com/uploads/posts/1173206-illustration-red-movies-Scott-Pilgrim-vs-the-World-poster-brand-bass-guitars-Michael-Cera-advertising-computer-wallpaper-album-cover.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098831691885322260/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 2 Scarymovie --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('scary') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098471856522137621/MjAwMC5qcGc.png"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098794354723803236/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 3 Superbad --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('superbad') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://hbomax-images.warnermediacdn.com/images/GYsgJzA68jUqupQEAAALE/tileburnedin?size=1280x720&partner=hbomaxcom&v=7af541999d1e05e7072975e480c3199e&host=art-gallery.api.hbo.com&language=es-419&w=1280"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098832594273058876/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Little --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('little') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://lumiere-a.akamaihd.net/v1/images/littlemisssunshine_coverart_1600x686_16333e05.jpeg?region=0,0,1600,686"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/d8c5e4fb-4b81-416f-8a4b-a48189893053/ddsvtun-0e47d354-239b-4def-9c0f-372e30ce41d6.png/v1/fit/w_300,h_512/little_miss_sunshine__2006__folder_icon_by_ackermanop_ddsvtun-300w.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 5 Jump street --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('jump') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://images.fanart.tv/fanart/21-jump-street-50a02661d4de0.jpg "
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e7ae2ac9-924a-4ab2-ba16-c4b52c22c817/d9v4jh8-81e469a9-8f77-4fa9-86e2-38397a6e98b6.png/v1/fill/w_512,h_512/21_22_jump_street_movie_collection_icon_folder_by_mohandor_d9v4jh8-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTEyIiwicGF0aCI6IlwvZlwvZTdhZTJhYzktOTI0YS00YWIyLWJhMTYtYzRiNTJjMjJjODE3XC9kOXY0amg4LTgxZTQ2OWE5LThmNzctNGZhOS04NmUyLTM4Mzk3YTZlOThiNi5wbmciLCJ3aWR0aCI6Ijw9NTEyIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.zI9Jt0m8KPorU9hp2rHcfG0CCrFH8SkfHp_ObRUhhEs"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 6 ydondeestanlasrubias --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('white') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://images.fanart.tv/fanart/white-chicks-604487ac6ff2e.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098836134877986827/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- ANIMADAS --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas Animadas</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 Los Mitchel --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('los_mitchel') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://occ.a.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABYDsbYSRVbTLiSARgOtY61zUEFrVC7z2EAg4S3GbsPuruhVo7jzQbYJGxIJJ10Y2P_OvIELbh-yBptqDpq0JPjxWEpkiJQ0Mwahmesfh_5akCsACweEeRF8Sv9UtRtuAxiQdmQ.jpg?r=f41"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/1082056175467646995/1098833639892062338/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 2 Turning red --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('red') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://cdn.atomix.vg/wp-content/uploads/2021/07/red-.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/d8c5e4fb-4b81-416f-8a4b-a48189893053/df19ght-8359b164-061e-4172-b405-9df6c8aa8e31.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 3 Minions --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('minions') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://occ.a.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABYyFsb1psitdoJQdfbOk_ANA8N5Lu-Hb0lwcIdNKMascA8h47yE4PHt_0nSJQ2uVpKVyPYEfbftMKTs6ZPqCe5nroCbzSfRbdVqn.jpg?r=d07"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098837906912710706/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Sherk2 --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('sherk2') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://wallpapers.com/images/hd/shrek-2-poster-main-cast-1n0p7vu78dwbr3m0.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098834838548643860/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 5 Toy Story --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('toy_tory') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://lumiere-a.akamaihd.net/v1/images/richbanner-toystory4_0026da28.jpeg?region=0,0,1920,1045"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://i.pinimg.com/originals/ac/d1/65/acd165b9af66ea2b20a2f848be27ea03.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★☆☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 6 pinocho --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('pinocho') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://thecollision.org/wp-content/uploads/2022/12/2.png"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098838578617929751/image.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- GUERRA --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas sobre la Guerra</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 Saving --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('saving') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://uploads.tickettailor.com/c_fill,h_600,w_1200/v1/production/userfiles/xq628zsjvhu0nbcg723i.jpg?_a=AAFIKDQ"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2c54b004-9dbd-44b7-8031-08fadd6517c1/dcbrg1u-904814bf-d166-43f1-b7e4-8628f11b2174.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJjNTRiMDA0LTlkYmQtNDRiNy04MDMxLTA4ZmFkZDY1MTdjMVwvZGNicmcxdS05MDQ4MTRiZi1kMTY2LTQzZjEtYjdlNC04NjI4ZjExYjIxNzQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.kT_-A8-1qEQG1pHR-woQCa54aO9eu_6T5KoOG4PYaqI"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 2 All quiet on the western  front --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('western') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i.ytimg.com/vi/zKK98RlyVMI/maxresdefault.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.shopify.com/s/files/1/0663/2112/1507/products/MOVATM369.webp?v=1677586446"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 3 Hasta el ultimo hombre --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('h_u_h') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://hbomax-images.warnermediacdn.com/images/GWSMFhAH5XYqXwgEAAACj/tileburnedin?size=1280x720&partner=hbomaxcom&v=4e3970c29d9966210332091c17d774ab&host=art-gallery.api.hbo.com&language=es-419&w=1280"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f1b05f51-6891-4cd4-b6b5-ae5fc961af3a/dczxsi4-c37e7626-e551-491b-8311-802bf291cc5e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2YxYjA1ZjUxLTY4OTEtNGNkNC1iNmI1LWFlNWZjOTYxYWYzYVwvZGN6eHNpNC1jMzdlNzYyNi1lNTUxLTQ5MWItODMxMS04MDJiZjI5MWNjNWUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jkIjPIOpaoiWP1fHMr5twz6EnCkja7Jv7CYHEIuwnd0"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Pianist --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('pianist') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://3.bp.blogspot.com/-qTrbG7NnlqI/TuYIy43wdyI/AAAAAAAAD6U/xOflnGwFESg/s1600/El+Pianista+7.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098840024147054612/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 5 Schinders --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('schinders') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://wallpapercave.com/wp/wp3849121.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://imgs.search.brave.com/NsViVHCY1aOwYryahuuMpaEmCDlfDMqd3uhT9GxsKCw/rs:fit:256:256:1/g:ce/aHR0cHM6Ly9pbWFn/ZXMtd2l4bXAtZWQz/MGE4NmI4YzRjYTg4/Nzc3MzU5NGMyLndp/eG1wLmNvbS9mL2E1/MDRjNzMyLTI0ODct/NDdjZC05MzgwLWQw/OGYzMmEwMjQ1NC9k/ZHEwem05LWU1ZjI2/ODljLTgxZDItNDMy/ZC04ZjdmLTg4NGQx/MDdjZjY2OC5wbmcv/djEvZmlsbC93XzI1/NixoXzI1NixzdHJw/L3NjaGluZGxlcl9z/X2xpc3RfZm9sZGVy/X2ljb25fYnlfZGFo/bGlhMDY5X2RkcTB6/bTktZnVsbHZpZXcu/cG5nP3Rva2VuPWV5/SjBlWEFpT2lKS1Yx/UWlMQ0poYkdjaU9p/SklVekkxTmlKOS5l/eUp6ZFdJaU9pSjFj/bTQ2WVhCd09qZGxN/R1F4T0RnNU9ESXlO/alF6TnpOaE5XWXda/RFF4TldWaE1HUXlO/bVV3SWl3aWFYTnpJ/am9pZFhKdU9tRndj/RG8zWlRCa01UZzRP/VGd5TWpZME16Y3pZ/VFZtTUdRME1UVmxZ/VEJrTWpabE1DSXNJ/bTlpYWlJNlcxdDdJ/bWhsYVdkb2RDSTZJ/anc5TWpVMklpd2lj/R0YwYUNJNklsd3Za/bHd2WVRVd05HTTNN/ekl0TWpRNE55MDBO/Mk5rTFRrek9EQXRa/REE0WmpNeVlUQXlO/RFUwWEM5a1pIRXdl/bTA1TFdVMVpqSTJP/RGxqTFRneFpESXRO/RE15WkMwNFpqZG1M/VGc0TkdReE1EZGpa/alkyT0M1d2JtY2lM/Q0ozYVdSMGFDSTZJ/anc5TWpVMkluMWRY/U3dpWVhWa0lqcGJJ/blZ5YmpwelpYSjJh/V05sT21sdFlXZGxM/bTl3WlhKaGRHbHZi/bk1pWFgwLkRQVkJq/MVgyd1BJQm1BS1la/QWlrUEdPQzFOZm11/OHRtQUQzUTVaLV9w/eDg"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 6 1917 --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('1917') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://culturageek.com.ar/wp-content/uploads/2020/01/Portada.jpeg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098841541176479785/image.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- TERROR --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas de Terror</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 It --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('it') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://cdn.traileraddict.com/content/warner-bros-pictures/it-2017-poster-2.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098842707415285832/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 2 terrifier --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('terrifier') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://www.terrifier2themovie.com/images/share.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098843734159937636/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 3 Shining --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('shining') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://dkanut5j171nq.cloudfront.net/0021/4034/The_Shining_QUAD_2017.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://imgs.search.brave.com/TUhylE9xTmTNbYitTar8sGEJz4XQIVPl7Gq8kUswFyw/rs:fit:700:700:1/g:ce/aHR0cHM6Ly9hc3Nl/dHMuYmlnY2FydGVs/LmNvbS9wcm9kdWN0/X2ltYWdlcy8yODM3/MTk3MjYvSkFDSy1U/T1JSQU5DRS5wbmc_/YXV0bz1mb3JtYXQm/Zml0PW1heCZoPTEy/MDAmdz0xMjAw"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Conjuro --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('conjuro') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://m.media-amazon.com/images/I/513ZUTaEgiL._AC_UF894,1000_QL80_.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://imgs.search.brave.com/JPQsB-HyaG4sHfcUTDcBS9KezZ_Y0zxyQgyxjKm1mEQ/rs:fit:1141:1000:1/g:ce/aHR0cDovL2FwcGNs/b3VkLndhcm5lcmJy/b3MuY29tL2FubmFi/ZWxsZS9iZWNvbWVh/bm5hYmVsbGUvaW50/bC91ay9fY2RuL2Zp/bGVzL2ltYWdlcy9s/YW5kaW5nL2RvbGwu/cG5n"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 5 Child play --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('child') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://imgs.search.brave.com/rK5Bqkf82RapibP-iYiClOcQ2U1CoGbt33tNVL_fg_Y/rs:fit:1200:720:1/g:ce/aHR0cHM6Ly93d3cu/cGVsaXNwbGF5LmNv/L3N0b3JhZ2UvaW1h/Z2VuZXMvZXh0cmFz/L3prejJrZ0dBcXd3/aXFMbnBmaFRORWpB/alBhMS5qcGc"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://imgs.search.brave.com/M1ohwMcY0Pfr3eptDZzWsCxSQua0SbI-y8whSFYjyr8/rs:fit:900:770:1/g:ce/aHR0cDovL3d3dy5w/bmdtYXJ0LmNvbS9m/aWxlcy8xMi9DaHVj/a3ktRG9sbC1QTkct/Q2xpcGFydC5wbmc"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 6 get out --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('getout') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://albertomirablog.files.wordpress.com/2017/03/get-out-movie-song.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1099108334470172722/image.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- MUSICALES --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas Musicales</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 La la land --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('Lala_land') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/f8b2ef92655071.5e505bf7132ab.png"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098845415492812941/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 2 mamamia --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('mamamia') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://justalrightreviewsdotcom.files.wordpress.com/2018/07/mamma-mia-here-we-go-again.png?w=1200"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/1096947192977166476/1099117322666528890/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 3 the greatest showman --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('thegreatest_showman') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i2-prod.essexlive.news/whats-on/film/article1376585.ece/ALTERNATES/s1200/greatest-showman-landscape.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://purplepeacockncl.co.uk/wp-content/uploads/2023/03/The-Greatest-Show-2023-2.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Rocketman --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('Rocketman') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://vupulse-api-production.s3.amazonaws.com/media/programs/destination-images/1d4ab812-4d45-449d-b42c-f8105a4d82eb.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098846078591307797/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 5 Grease --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('Grease') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://w0.peakpx.com/wallpaper/497/771/HD-wallpaper-movie-grease-john-travolta-olivia-newton-john.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://static.wixstatic.com/media/a02158_97c0f7203c3544aa8deaac208b5bf235~mv2.png/v1/fill/w_530,h_560,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Grease_logo_REDCAR.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★☆☆☆</h3>
                </div>
            </div>
            {{-- contenedor 6 singing in the rain --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('singingin_the_rain') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i.etsystatic.com/27817007/r/il/2d5a06/2875419068/il_fullxfull.2875419068_iiiz.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://i.pinimg.com/originals/8f/fe/4b/8ffe4b6a14ffc1170ace16b4fff8af7f.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- SUPERHEROES --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas de SuperHeroes</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 batman --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('batman') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://www.wallpaperflare.com/static/735/898/350/batman-dark-knight-poster-wallpaper.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1099366548587688026/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 2 X-man --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('xmen') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://picfiles.alphacoders.com/652/65284.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098850682947248179/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 3 Avengers --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('avengers') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://fondosmil.com/fondo/30211.png" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://www.pngmart.com/files/13/Avengers-Infinity-War-Transparent-Images-PNG.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 4 Deadpool --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('deadpool') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i.ytimg.com/vi/6IDkzHEmEtg/maxresdefault.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098849275905060904/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 5 SucideSquad --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('squad') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://wallpapercave.com/wp/wp9586037.jpg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098847890828431410/image.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 6 snyder cut --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('justicia') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i0.wp.com/cinemedios.com/wp-content/uploads/2020/05/snyder-cut-liga-de-la-justicia-posters-oficiales.jpg?fit=1200%2C675&ssl=1"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1098847041855176804/image.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- CIENCIA FICCIÓN --}}
    <div style="display: flex; justify-content: center; flex-direction: column">
        <div style="display: flex">
            <h1 style="color: white; padding-left:30px ">Peliculas de Ciencia Ficción</h1>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center">
            {{-- contenedor 1 matrix --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('matrix') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://pbs.twimg.com/media/FEff7onWQA0bOkl?format=jpg&name=4096x4096"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/864577245905551391/1099104421725610114/image.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★★</h3>
                </div>
            </div>
            {{-- contenedor 2 terminator --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('terminator') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://pbs.twimg.com/media/FVSISv0WIAIPVui.jpg:large" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://cdn.discordapp.com/attachments/1096947192977166476/1099107625104330782/ter-removebg-preview.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 3 star wars --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('star_wars') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://i.blogs.es/1da08b/1366_2000-9-/1366_2000.jpeg" class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://loodibee.com/wp-content/uploads/Star-Wars-transparent-logo.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 4 zathura --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('zathura') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://metadata-static.plex.tv/1/gracenote/1d9f506ce5c2b71cccec9af8d75c31d2.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images.fanart.tv/fanart/zathura-a-space-adventure-58f55d054703b.png"
                            class="character" />
                    </div>

                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★★☆</h3>
                </div>
            </div>
            {{-- contenedor 5 men in black --}}
            <div style="display: flex; flex-direction: column; margin-right: 30px">
                {{-- link --}}
                <a href="{{ route('man_black') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://m.media-amazon.com/images/S/pv-target-images/4ff72c693abfcedd6dcf537468a3582f34909741d1e11a8a7c17508eb7116842._UR1920,1080_.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://sticker.nyc3.cdn.digitaloceanspaces.com/20210871/file_1692885_512x512.webp"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
            {{-- contenedor 6 live die repeat  --}}
            <div style="display: flex; flex-direction: column; margin-right: 0px">
                {{-- link --}}
                <a href="{{ route('live_die_repeat') }}" alt="Mythrill" target="_blank">
                    <div class="card">
                        <div class="wrapper">
                            {{-- img --}}
                            <img src="https://www.slashfilm.com/img/gallery/why-edge-of-tomorrow-got-retitled-live-die-repeat/intro-import.jpg"
                                class="cover-image" />
                        </div>
                        {{-- png cuerpo --}}
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/40eb3ade-91e8-48e4-9923-dc622562072f/dfam034-91098398-78b6-4a30-9460-8db3bc228b05.png"
                            class="character" />
                    </div>
                </a>
                <div style="display: flex; margin-top: 75px; justify-content: center">
                    <h3 style="display: flex ;color: white; justify-content: center">estrellas</h3>
                    <h3 style="color: yellow">★★★☆☆</h3>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
