<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/produtos">Controle de Estoque</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/produtos">Listagem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produtos/novo">Novo</a>
                </li>

            </ul>
        </div>
    </nav>
    @yield('conteudo')
</div>
</body>
</html>