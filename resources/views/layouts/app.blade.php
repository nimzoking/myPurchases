<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'myPurchases') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    @yield('styles')
</head>
<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                 
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'myPurchases') }}
                    </a>
                        <!-- Authentication Links -->
                        @guest
                        <a class ="nav-item nav-link" href="{{ route('login') }}">Login</a>
                        <a class ="nav-item nav-link" href="{{ route('register') }}">Register</a>
                        @else
                        <a class ="nav-item nav-link text-white bg-dark" href="{{ url('home') }}">Dashboard</a>
                        <a class ="nav-item nav-link text-white bg-dark" href="{{ url('create') }}">Create</a>
                        <a class ="nav-item nav-link text-white bg-dark" href="{{ url('browse') }}">Browse</a>
                        <a class ="nav-item nav-link text-white bg-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        
                        @endguest
            </nav>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
