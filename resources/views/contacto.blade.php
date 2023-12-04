<!DOCTYPE html>
<html lang="es">
<title>Contacto</title>
<header style="display: flex; align-items: center">
    <div class="contenedor">
        <h2 class="logotipo">CINE +</h2>
        <nav style="display: flex">
            <a href="{{ route('inicio') }}" class="activo">Inicio</a>
            <a href="#peliculas">Películas</a>
            <a href="#contacto">Contacto</a>
            <div style="display: flex;">
                <a>Bienvenido Pepito </a>
                <a href="http://127.0.0.1:8000/logout"><button type="button" class="boton-salir">Salir</button></a>
            </div>
        </nav>
    </div>

</header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-2iSJWnI8YvYmsMgOMCQ25fzPZpn9h44ntiOKO/nc0b/d+HUt0xdwDWjIJmfwzR1xfFWmZi96cCFdrgllUGGtPg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    /* ---- ----- ----- Contenedor Titulo y Controles ----- ----- ----- */
</style>

<style>
    .our-team {
        padding: 30px 0 40px;
        margin-bottom: 30px;
        background-color: #2e2e2e;
        text-align: center;
        overflow: hidden;
        position: relative;
    }

    .our-team .picture {
        display: inline-block;
        height: 130px;
        width: 130px;
        margin-bottom: 50px;
        z-index: 1;
        position: relative;
    }

    .our-team .picture::before {
        content: "";
        width: 100%;
        height: 0;
        border-radius: 50%;
        background-color: #E50914;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 0.9;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }

    .our-team:hover .picture::before {
        height: 100%;
    }

    .our-team .picture::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #E50914;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .our-team .picture img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
    }

    .our-team:hover .picture img {
        box-shadow: 0 0 0 14px #2e2e2e;
        transform: scale(0.7);
    }

    .our-team .name {
        color: white;
        font-size: 24px;
        font-weight: bold;
    }

    .our-team .title {
        display: block;
        font-size: 15px;
        color: white;
        text-transform: capitalize;
    }

    .our-team .social {
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: #E50914;
        position: absolute;
        bottom: -100px;
        left: 0;
        transition: all 0.5s ease 0s;
    }

    .our-team:hover .social {
        bottom: 0;
    }

    .our-team .social li {
        display: inline-block;
    }

    .our-team .social li a {
        display: block;
        padding: 10px;
        font-size: 17px;
        color: white;
        transition: all 0.3s ease 0s;
        text-decoration: none;
    }

    .our-team .social li a:hover {
        color: #1369ce;
        background-color: #f7f5ec;
    }
</style>


<body>
    <div class="container">
        <div class="row" style="display: flex; justify-content: space-evenly;margin-top: 10%; flex-wrap: wrap">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid"
                            src="https://i.pinimg.com/564x/1e/28/35/1e2835c35b4c8b962ff9153aa205987e.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Sebastian Becerra</h3>
                        <h4 class="title">Senatino</h4>
                    </div>
                    <ul class="social">
                        <li><a href="" class="" aria-hidden=""></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid"
                            src="https://i.pinimg.com/564x/64/52/27/6452274e83157ecac875071b0f03b9e8.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Kevin Miranda</h3>
                        <h4 class="title">Senatino</h4>
                    </div>
                    <ul class="social">
                        <li><a href="" class="" aria-hidden=""></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid"
                            src="https://i.pinimg.com/564x/84/22/40/842240f3ff7d69f41360da77a267776e.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Hiroshi Shimabukuro</h3>
                        <h4 class="title">Senatino</h4>
                    </div>
                    <ul class="social">
                        <li><a href="" class="" aria-hidden=""></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="https://cdn.discordapp.com/attachments/1082056175467646988/1099199365261824100/IMG-20230422-WA0000.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Kevin Tintaya</h3>
                        <h4 class="title">Senatino</h4>
                    </div>
                    <ul class="social">
                        <li><a href="" class="" aria-hidden=""></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" style="width: 300px">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid"
                            src="https://cdn.discordapp.com/attachments/864577245905551391/1099198010837172254/Sin_titulo.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Marcela Pinto</h3>
                        <h4 class="title">Senatina</h4>
                    </div>
                    <ul class="social">
                        <li><a href="" class="" aria-hidden=""></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li></a></li>
                        <li><a href="" class="" aria-hidden=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{ }}
