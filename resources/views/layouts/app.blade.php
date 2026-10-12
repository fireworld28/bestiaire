<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <header class="entete">
            <title>@yield('titre')</title>
            <h1>Le Bestiaire</h1>
            <img>
            <nav>
                <button><a href="{{ route('accueil') }}">Accueil</a></button>
                <button><a href="{{ route('creature.index') }}">Créature</a></button>
                <button><a href="{{ url('/creature/create') }}">Ajouter</a></button>
            </nav>
        </header>


            @yield('contenu')

    </body>

    <footer class="pied">
        BTS SIO SLAM- TP Laravel
    </footer>

</html>