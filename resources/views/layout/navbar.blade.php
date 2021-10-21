<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>The Good Corner : Freeads website to sell and buy second-hand stuffs</title>
</head>

<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md " id="navbar_test_1">
            <div class="container">

                <p class="logo"><a href="{{ url('/') }}">
                        <i class="fas fa-store"></i> The Good Corner
                    </a></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon colored"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Partie gauche de la navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Partie a remplir avec les liens de pages si besoin.-->
                    </ul>

                    <!-- Partie droite de la navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Lien d'authentification -->
                        <a class="p-2" href="/account/create" id="link_footer">Post your ad !</a>
                        <a class="p-2" href="/search" id="link_footer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </a>

                        <!-- Partie a changer pour s'adapter a votre taf -->

                    <!-- Fin de la partie a changer -->


                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<body>
<main class="py-4">
    @yield('content')
</main>
</body>

</html>
