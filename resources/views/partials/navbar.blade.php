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
        <ul class="navbar-nav ml-auto">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
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
                &nbsp; 
                <li class="nav-item">
                <a href="/contact" class="nav-link">contact</a>
                </li>
            @else
                <style>
                    .dropdown {
                        right: 0;
                        left: auto;
                    }
                </style>
                <div class="user-profile">
                    <div class="dropdown">      
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i>
                            {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">  
                                <a class="dropdown-item" type="button" href="/profile">ProfielPagina</a>                  
                            <a class="dropdown-item" type="button" href="/posts/create">Maak Post</a>
                            @if(Auth::user()->role == 'admin')
                          <a class="dropdown-item" type="button" href="/admin/users">Admin paneel</a>
                          @endif
                          @auth
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            <button class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                            @csrf
                        </form>
                        @endauth
                    </div>
                    &nbsp; 
                  </div>
                </div>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">contact</a>
                    </li>
        @endguest  
    </ul>
</div>
</div>
</nav>
