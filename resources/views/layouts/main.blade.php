<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald" rel="stylesheet">

    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="../img/scorpio_logo.jpg" alt="" srcset="">
                </a>
                <ul class="navbar-nav">
                    <li  class="nav-link">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li href="/" class="nav-link">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li> 
                    @auth
                    <li class="nav-link">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="nav-link">
                        <form action="/logout" method="POST">
                        @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                            Sair</a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li href="/" class="nav-link">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li href="/" class="nav-link">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>   
                    @endguest 
                </ul>
            </div>
        </nav>
    </header>  
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
    
                @yield('content')
            </div>
        </div>
    </main>
    
    <footer>
        <p>HDC EVENTS &copy; 2022</p>
    </footer>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


</html>
