
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">

    <style>
        #landing-page {
            background: url(http://www.antoine-piche.com/temp/asap.jpg) no-repeat center fixed !important;
            -webkit-background-size: cover; /* pour anciens Chrome et Safari */
            background-size: cover; /* version standardisée */
            margin-top: 40% !important;
        }
    </style>
</head>
<body id="landing-page">
{{--<nav class="navbar navbar-default">
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
                --}}{{--<div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>--}}{{--
                --}}{{--<li><a href="{{ url('/home') }}">Home</a></li>--}}{{--
                <li><a href="#"><i class="fa fa-star-o"></i> Publications BUMPed</a></li>
                <li><a href="{{ route('post.index') }}"><i class="fa fa-heart-o"></i> Dernières publications</a></li>
                @if(Auth::check())
                    <li><a href="{{ route('post.create') }}"><i class="fa fa-pencil"></i> Poster un article</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <div class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Se connecter</a></li>
                    <li><a href="{{ url('/register') }}"> <i class="fa fa-user">Créer mon compte</a></li>
                @else
                    <li><a href="{{ route('user.show', Auth::user()->id) }}"><i class="fa fa-btn fa-user"></i> Mon compte - {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a></li>
                @endif
            </div>
        </div>
    </div>
</nav>--}}

<div class="landing-page">
    <div class="container-fluid">
        <div class="row">
            <div class="login-part text-center">
                <div class="col-xs-6 col-xs-offset-3">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.37 143.09"><title>logo</title><text transform="translate(28.56 111.71) scale(1.04 1)" font-size="111.19" fill="#eb3254" font-family="Open Sans" font-weight="700" style="isolation:isolate">B</text><path d="M142.76,147.68H21.24a8,8,0,0,1-7.92-7.92V18.24a8,8,0,0,1,7.92-7.92H142.76a8,8,0,0,1,7.92,7.92V139.76A8,8,0,0,1,142.76,147.68Z" transform="translate(-12.82 -9.82)" fill="none" stroke="#eb3254" stroke-miterlimit="10"/></svg>                </div>
                <div class="col-xs-12 text-center">
                    <a class="btn btn-green-full" href="{{ route('post.index') }}">SE CONNECTER</a>
                    <div class="clearfix"></div>
                    <a href="{{ url('/register') }}"><button class="btn btn-green-empty">Créer un compte</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>



