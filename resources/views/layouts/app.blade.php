<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <ul class="nav navbar-nav">
                    {{--<div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>--}}
                    {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                <li><a href="#"><i class="fa fa-star-o"></i> Publications BUMPed</a></li>
                <li><a href="{{ route('post.index') }}"><i class="fa fa-heart-o"></i> Dernières publications</a></li>
                @if(Auth::check())
                    <li><a href="{{ route('post.create') }}"><i class="fa fa-pencil"></i> Poster une annonce</a></li>
                @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <div class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Se connecter</a></li>
                        <li><a href="{{ url('/register') }}"> <i class="fa fa-user"></i> Créer mon compte</a></li>
                    @else
                        <li><a href="{{ route('user.show', Auth::user()->id) }}"><i class="fa fa-btn fa-user"></i> Mon compte - {{ Auth::user()->name }}</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a></li>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
