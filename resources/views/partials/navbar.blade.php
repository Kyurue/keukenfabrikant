<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="https://keukenfabrikant.nl/wp-content/uploads/2018/05/keukenfabrikant-1200280-300x70.png"
        alt="logo" height="60px" alt="LogoInfocus">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                    
                <div class="user-profile">
                    <i class="far fa-user"></i>
                <a class="user-profile" href="/profiel">{{ Auth::user()->voornaam }}</a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <button id="logoutBtn" href="{{ route('logout') }}">Logout</button>
                    @csrf
                </form>
                {{-- <li class="nav-item dropdown">
                
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>                            
                    </div>
                </li> --}}
            @endguest
        </ul>
    </div>
</div>
</nav>
