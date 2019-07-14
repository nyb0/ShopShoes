<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shop|Stars|Shoes') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Rubik Mono One' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md menu shadow-sm position-sticky p-0">
        <div class="container col-md-12">
            <div class="col-md-8 p-0 text-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Shop|Stars|Shoes') }}
                </a>
                <div class="col-md-12 d-flex justify-content-between">
                    <a class="basket" href="{{ url('/basket') }}">
                        {{ __('Basket') }}
                        (<span id="basket-count">{{ \SHOP\Basket::getBasketCount() }}</span>)
                    </a>
                    <div id="search-box" class="col-md-8 m-0 p-0">           
                        <form class="form-inline d-flex flex-nowrap px-0" action="{{ url('/search') }}">
                            <input class="form-control py-auto mr-2 w-100" name="word" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success click-search my-0 py-auto" type="submit"><i class="fas pr-2 fa-search"></i><span>Search</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-md-4">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mx-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right dropdown-user mx-0" aria-labelledby="navbarDropdown">
                                                                        
                                    <a class="dropdown-item drop-link" href="{{ url('/orders') }}">
                                        {{ __('My orders') }}
                                    </a>
                                    
                                    @if (\Illuminate\Support\Facades\Auth::user()->role === \SHOP\User::ROLE_ADMIN)
                                        
                                        <a class="dropdown-item drop-link admin-link" href="{{ url('/admin') }}">
                                            {{ __('Product LIST') }}
                                        </a>
                                        
                                        <a class="dropdown-item drop-link admin-link" href="{{ url('/admin/create-product') }}">
                                            {{ __('Create product') }}
                                        </a>

                                        <a class="dropdown-item drop-link admin-link" href="{{ url('/admin/orders') }}">
                                            {{ __('All orders') }}
                                        </a>

                                        <a class="dropdown-item drop-link admin-link" href="#">
                                            {{ __('All clients') }}
                                        </a>

                                    @endif
                                    
                                    <a class="dropdown-item drop-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </div>
        
    </nav>

        <main class="p-2 col-md-12 d-flex justify-content-center">
            <div class="container col-md-12 px-1 d-flex">
                <div class="row col-md-12 justify-content-end mx-0 px-1">
                    <div class="navigation col-md-2">

                        @include('layouts.navigation')
                    
                    </div>
                    
                    <div class="content d-flex col-md-10 p-2">
                    
                        @yield('content')

                    </div>
                </div>
            </div>
        </main>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

</body>
</html>
