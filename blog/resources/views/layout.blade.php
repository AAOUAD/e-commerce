<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yield_section_extends</title>
    <link rel="stylesheet" href="{{ 'css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{'css/style.css'}}">
    <script src="{{'js/bootstrap.bundle.min.js'}}"></script>
    <script src="{{'js/bootstrap.min.js'}}"></script>
</head>
<body>
    <!-- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/posts')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">homepage</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Registe </a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
                    @endguest
            </ul>

        </div>
    </nav>
     <!-- -->
    @yield("contenu")
     <!-- -->
</body>
</html>
