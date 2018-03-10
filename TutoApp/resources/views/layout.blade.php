<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Steven Sil - @yield('title')</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-success">
      <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">Steven Sil @yield('navbar')</a>
        <ul class="nav navbar-nav pull-xs-right text-xs-center">
          @if (Auth::guest())
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/inscription') }}">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/connexion') }}">Connexion</a>
            </li>
          @else
            @if (Auth::user()->is_admin === 1)
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">Espace administrateur</a>
              </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/compte') }}">{{ Auth::user()->email }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/deconnexion') }}">Déconnexion</a>
            </li>
          @endif
        </ul>
      </div>
    </nav>
    <div class="container">
       @yield('content')
    </div>
  </body>
</html>
