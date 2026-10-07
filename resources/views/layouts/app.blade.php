<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('css/app.css  ') }}">
    </head>

    <body>
        <header class="entete">
            <title> @yield('titre', 'Accueil') </title>
            <h1>Le Bestiaire</h1>
            <nav>
                <span class="logo">Le Bestiaire</span>
                <button><a href="{{ url('/dashboard') }}">Accueil</a></button>
                <button><a href="{{ url('/creatures') }}">Créatures</a></button>
                <button><a href="{{ url('/creatures/create') }}">Ajouter</a></button>
            </nav>
        </header>

        <main>
            @yield('contenu')
        </main>
    </body>

    <footer class="pied">
        BTS SIO SLAM- TP Laravel
    </footer>

</html>