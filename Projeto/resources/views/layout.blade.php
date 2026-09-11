<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', '')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            border-top: 1px solid #ddd;
            padding: 1.2rem 2rem;
            box-shadow: 0 -2px 12px rgba(0,0,0,.08);
            z-index: 1000;
        }
        .cookie-banner p{
            margin-bottom: .8rem;
            max-width: 700px;
        }
        
        .cookie-banner-botoes {
            display: flex;
            gap: .6rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }
        .btn-normal, .btn-alto, .btn-baixo {
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
        }
        .btn-normal {
            padding: .6rem 1.2rem;
            background: #e2e4e9;
            color: #222;
        }
        .btn-alto {
            padding: .9rem 1.8rem;
            background: #2b6cb0;
            color: #fff;
            font-size: 1.05rem;
        }
        .btn-baixo {
            padding: .3rem .6rem;
            background: transparent;
            color: #888;
            font-size: .8rem;
        }
    </style>
</head>
<body>
    <header class="container py-3">
        <h1>@yield('title','Cenario - Banner de Cookies')</h1>
    </header>
    <main>
        @if(session('mensagem'))
            <p>{{ session('mensagem') }}</p>
        @endif
    </main>
    <div class="container py-3">
        @yield('conteudo','')
    </div>
    
    <footer class="container text-center py-3" >
        <p>Disciplina de Programação Web - Cenário sobre Padrões enganosos</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>