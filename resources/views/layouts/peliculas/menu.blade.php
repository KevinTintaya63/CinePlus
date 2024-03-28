<header style="display: flex; align-items: center">
    <div class="contenedor">
        <h2 class="logotipo">CINE +</h2>
        <nav style="display: flex">
            <a href="{{ route('inicio.pelicula') }}" class="activo">Inicio</a>
            <a href="#peliculas">Películas</a>
            <div style="display: flex;">
                <a>Bienvenido @auth {{ Auth::user()->name }} @endauth
                </a>
                <a href="{{ route('logout') }}"><button type="button" class="boton-salir">Salir</button></a>
            </div>
        </nav>
    </div>
</header>