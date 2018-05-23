<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lity.min.css') }}" rel="stylesheet">                
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" type="text/javascript"></script>        



    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <i class="fa fa-home"></i> {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">


                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->

                            @guest

                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-key"></i> Register</a></li>
                            @else
                            <li><a href="{{ url('/typebooks') }}"><i class="fa fa-book"></i> TypeBook</a></li>
                            <li><a href="{{ url('/books') }}"><i class="fa fa-book"></i> Book</a></li>
                            <li><a href="{{ url('/customers') }}"><i class="fa fa-users"></i> Customers</a></li>
                            <li><a href="{{ url('/about')}}"><i class="fa fa-edit"></i> About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-user-circle"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
            @yield('footer')
        </div>
        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ url('js/lity.min.js') }}" type="text/javascript"></script>        

    </body>
</html>
