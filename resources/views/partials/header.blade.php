<!--<div class=" bg-info" style="">
    <div class="row">
        <div class="col-md-6">
            <p class="lead">Whatsapp: 1559350431</p>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>--->
<nav class="navbar navbar-expand-md navbar-dark light-blue darken-1 fixed-top">
    <div class="container">
        <a class="navbar-brand border rounded-circle p-2" href="{{ url('/') }}">
            {{ config('app.name', 'CR-Tienda') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Inicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('item') }}">{{ __('Productos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i>(5)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto.index') }}">{{ __('Contacto') }}</a>
                </li>
            @guest
                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Registrar</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard.index') }}">admin</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('cerrar session') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>