<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Videoclub</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog')}}">
                            <span class="fas fa-video" aria-hidden="true"></span> 
                            Películas
                        </a>
                    </li>
                   <li class="nav-item {{  Request::is('director') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/director')}}">
                            <span class="fas fa-address-book" aria-hidden="true"></span> 
                            Directores
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('actor') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/actor')}}">
                            <span class="fas fa-user-tie" aria-hidden="true"></span>
                            Actores
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('genre') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/genre')}}">
                            <span class="fas fa-film" aria-hidden="true"></span> 
                            Géneros
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('user') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/user')}}">
                            <span class="fas fa-user-cog" aria-hidden="true"></span>
                            Usuarios
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('client') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/client')}}">
                            <span class="fas fa-user" aria-hidden="true"></span>
                            Clientes
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
