<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    <!--Fonte do Google-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,600&family=Poppins&display=swap" rel="stylesheet">

    <!--CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--CSS da aplicação-->
<link rel="stylesheet" href="/css/style.css">
<script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar" id="navbar">
        <a href="/" class="navbar-brand">
            <img src="/img/logo.png" alt="Buffet Magic Castle" width="70px">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link">Festas</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Cardápio</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Cadastrar</a>
            </li>
        </ul>
    </div>
</nav>

            
            </header>
@yield('content')
    <footer>
        <p>Buffet Magic Castle &copy; 2023</p>
    </footer>
        </body>
</html>
