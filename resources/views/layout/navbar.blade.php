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

                        <!-- Insert $_SESSION -->

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
