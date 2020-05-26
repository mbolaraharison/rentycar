<!-- Small -->
<div class="container sph-container sph-header-container sph-container-sm">
    <div class="row sph-row sph-row-menu-top sph-fixing-middle-row">
        <div class="col-9 sph-col sph-logo-container">
            <h2>RentyCar</h2>
        </div>
        <div class="col-3 sph-col sph-bouton-toggler">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="row sph-row sph-fixing-middle-row">
        <div class="col-9 sph-col">
        </div>
        <div class="col-3 sph-col sph-target-toggler">
            @if (Route::has('login'))
                <div class="collapse navbar-collapse sph-navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav navbar-nav navbar-right sph-menu-list">
                        @auth
                            @if(\Request::is('/') || \Request::is('home'))
                                <li class="nav-item active mr-auto">
                                    <a href="{{ url('/home') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item mr-auto">
                                    <a href="{{ url('/home') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
                        @else
                            @if(\Request::is('/') || \Request::is('home'))
                                <li class="nav-item active mr-auto">
                                    <a href="{{ url('/') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="text-dark">Signin</a>
                                </li>
                            @elseif(\Request::is('login'))
                                <li class="nav-item mr-auto">
                                    <a href="{{ url('/home') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="{{ route('login') }}" class="text-dark">Signin</a>
                                </li>
                            @elseif(\Request::is('register'))
                                <li class="nav-item mr-auto">
                                    <a href="{{ url('/home') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="text-dark">Signin</a>
                                </li>
                            @else
                                <li class="nav-item mr-auto">
                                    <a href="{{ url('/home') }}" class="text-dark">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="text-dark">Signin</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Medium -->
<div class="container sph-container sph-header-container sph-container-md">
    <div class="row sph-row sph-row-menu-top sph-fixing-middle-row">
        <div class="col-4 sph-col sph-logo-container">
            <h2>RentyCar</h2>
        </div>
        <div class="col-8 sph-col sph-menu-container">
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right sph-menu-list">
                @auth
                    @if(\Request::is('/') || \Request::is('home'))
                        <li class="nav-item active mr-auto">
                            <a href="{{ url('/home') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item mr-auto">
                            <a href="{{ url('/home') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                @else
                    @if(\Request::is('/') || \Request::is('home'))
                        <li class="nav-item active mr-auto">
                            <a href="{{ url('/') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-dark">Signin</a>
                        </li>
                    @elseif(\Request::is('login'))
                        <li class="nav-item mr-auto">
                            <a href="{{ url('/home') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ route('login') }}" class="text-dark">Signin</a>
                        </li>
                    @elseif(\Request::is('register'))
                        <li class="nav-item mr-auto">
                            <a href="{{ url('/home') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-dark">Signin</a>
                        </li>
                    @else
                        <li class="nav-item mr-auto">
                            <a href="{{ url('/home') }}" class="text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-dark">Signin</a>
                        </li>
                    @endif
                @endauth
            </ul>
            @endif
        </div>
    </div>
</div>
<!-- Large -->
<div class="container sph-container sph-header-container sph-container-lg">
    <div class="row sph-row sph-row-menu-top sph-fixing-middle-row">
        <div class="col-4 sph-col sph-logo-container">
            <h2>RentyCar</h2>
        </div>
        <div class="col-8 sph-col sph-menu-container">
            @if (Route::has('login'))
                <ul class="nav navbar-nav navbar-right sph-menu-list">
                    @auth
                        @if(\Request::is('/') || \Request::is('home'))
                            <li class="nav-item active mr-auto">
                                <a href="{{ url('/home') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item mr-auto">
                                <a href="{{ url('/home') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                    @else
                        @if(\Request::is('/') || \Request::is('home'))
                            <li class="nav-item active mr-auto">
                                <a href="{{ url('/') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="text-dark">Signin</a>
                            </li>
                        @elseif(\Request::is('login'))
                            <li class="nav-item mr-auto">
                                <a href="{{ url('/home') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a href="{{ route('login') }}" class="text-dark">Signin</a>
                            </li>
                        @elseif(\Request::is('register'))
                            <li class="nav-item mr-auto">
                                <a href="{{ url('/home') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="text-dark">Signin</a>
                            </li>
                        @else
                            <li class="nav-item mr-auto">
                                <a href="{{ url('/home') }}" class="text-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="text-dark">Signin</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </div>
</div>