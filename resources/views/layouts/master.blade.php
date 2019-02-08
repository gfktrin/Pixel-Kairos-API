<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="favicon.ico">

    <!-- import bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- import layout css -->
    <link rel="stylesheet" href="css/layout.css">

    <!-- import css personalisado da página atual -->
@yield('css')
<!-- fonts -->

    <link href="https://fonts.googleapis.com/css?family=Abel|Fira+Sans+Extra+Condensed|Inconsolata|Raleway|Passion+One|Bungee+Shade" rel="stylesheet">

    <!--fontawesome -->
    <script src="https://use.fontawesome.com/8f17e1c752.js"></script>

    <title>@yield('title')</title>

</head>


<body>
<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light">

        <!-- menu retratil -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- logo pixelKairos -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img id="logo" src="img/logo.png" alt="Pixel Kairos">
        </a>

        <!-- barra de navegação -->
        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sobre') }}">A empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/portfolio') }}">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success" id="navbutton" href="{{ route('login') }}">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" id="navbutton" href="{{ route('register') }}">Criar conta</a>
                </li>
            </ul>
        </div>
    </nav> <!-- fim do navbar -->

    <!-- painel de página -->
    <!-- <div class="jumbotron jumbotron-fluid"> -->
    <div class="jumbotron jumbotron-fluid" id="painel">
        <div class="container">
        @yield('panel-content') <!-- adicionar o conteúdo do painel via blade section() na respectiva página-->
        </div>
    </div>
    <!--   </div>  -->
</header>

<!-- contúdo da página -->
@yield('content')

<!-- rodapé -->
<footer>
    <div class="container-fluid">
        <ul>
            <li>
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true" title="Facebook"></i>
                    <span class="sr-only">Facebook</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-linkedin fa-2x" aria-hidden="true" title="Linkedin"></i>
                    <span class="sr-only">Linkedin</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true" title="Instagram"></i>
                    <span class="sr-only">Instagram</span></a>
            </li>
        </ul>
    </div>
</footer>

<!-- script bootstrap -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- script layout -->
<script type="text/javascript" src="js/layout.js"></script>
@yield('script')
<!-- script para barra a animação de loading entre as páginas -->
<script type="text/javascript" src="js/pace.min.js"></script>
</body>
</html>