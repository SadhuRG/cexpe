<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('imagenes/home-icon.png') }}" alt="Home Icon">
                INICIO
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ setActivo('inicio') }}">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item {{ setActivo('asesoramiento') }}">
                        <a class="nav-link" href="{{ url('/asesoramiento') }}">Asesoramiento</a>
                    </li>
                    <li class="nav-item {{ setActivo('talleres') }}">
                        <a class="nav-link" href="{{ url('/talleres') }}">Talleres</a>
                    </li>
                    <li class="nav-item {{ setActivo('contacto') }}">
                        <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item {{ setActivo('programas') }}">
                        <a class="nav-link" href="{{ url('/programas') }}">Programas</a>
                    </li>
                    <li class="nav-item {{ setActivo('personas*') }}">
                        <a class="nav-link" href="{{ url('/personas') }}">Personas</a>
                    </li>

                </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>

                    <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link login-button" href="{{ route('login') }}">INICIAR SESION</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link login-button" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESION</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>