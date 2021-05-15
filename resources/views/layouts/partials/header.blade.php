<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <!-- <h1 class="logo mr-auto"><a href="index.html">Mentor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        @guest
            <a href="{{route('index')}}" class="logo mr-auto">
                <img src="{{ asset('img/imdLogo.png') }}" alt="" class="img-fluid">
            </a>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
        <nav class="nav-menu d-none d-lg-block mr-auto">
            <ul>
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('information') }}">Sobre</a></li>
                <li><a href="{{ route('collaborate') }}">Como colaborar</a></li>

                @auth
                    <li><a href="{{ route('profile') }}">Meu perfil</a></li>
                    @if(auth()->user()->is_admin)
                        <li>
                            <a href="{{ route("professores.index") }}" role="button">
                                Painel de Administração
                            </a>
                        </li>
                @endif
            @endauth
            <!-- <li class="drop-down"><a href="">Drop Down</a>
                  <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="drop-down"><a href="#">Deep Drop Down</a>
                      <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                  </ul>
                </li> -->

            </ul>
        </nav><!-- .nav-menu -->
        @guest
            <a href="{{ route('login') }}" class="get-started-btn">Entrar</a>
        @endguest
    </div>
</header>
