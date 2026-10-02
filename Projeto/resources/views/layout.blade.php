<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', '')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lora:wght@500;600&display=swap" rel="stylesheet">
    <style>
    :root {
        --bg: #F2F4F1;
        --ink: #1C2430;
        --ink-muted: #5B6572;
        --primary: #2F6F6B;
        --primary-dark: #244F4C;
        --flag: #D1495B;
        --highlight: #F4C95D;
        --line: #D8DDD7;
        --font-head: 'Lora', serif;
        --font-body: 'Inter', sans-serif;
    }

    body {
        font-family: var(--font-body);
        background: var(--bg);
        color: var(--ink);
    }

    h1, h2, h3, h4, h5 {
        font-family: var(--font-head);
        font-weight: 600;
        color: var(--ink);
    }

    /* Cabeçalho vira uma barra de navegação real */
    header.site-header {
        background: var(--bg);
        border-bottom: 1px solid var(--line);
        padding: 1.1rem 0;
    }
    header.site-header .wordmark {
        font-family: var(--font-head);
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--ink);
        text-decoration: none;
    }
    header.site-header .wordmark span {
        background: var(--highlight);
        padding: 0 .2rem;
    }
    header.site-header nav a {
        color: var(--ink-muted);
        text-decoration: none;
        font-size: .95rem;
        margin-left: 1.5rem;
    }
    header.site-header nav a:hover { color: var(--primary); }

    /* Botões */
    .btn-primary {
        background: var(--primary);
        border-color: var(--primary);
    }
    .btn-primary:hover, .btn-primary:focus {
        background: var(--primary-dark);
        border-color: var(--primary-dark);
    }
    .btn-outline-secondary {
        color: var(--ink-muted);
        border-color: var(--line);
    }

    /* Rodapé */
    footer.site-footer {
        border-top: 1px solid var(--line);
        color: var(--ink-muted);
        font-size: .9rem;
    }

    /* Exhibit cards — usadas no lobby de cenários */
    .exhibit-card {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 4px;
        position: relative;
        padding: 1.5rem 1.25rem 1.25rem;
    }
    .exhibit-card .tab {
        position: absolute;
        top: -1px;
        left: 1.25rem;
        background: var(--primary);
        color: #fff;
        font-family: var(--font-head);
        font-size: .8rem;
        padding: .15rem .6rem;
        border-radius: 0 0 4px 4px;
    }

    /* --- Estilos do cenário (mantém o que já existia) --- */
    .cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #fff;
        border-top: 1px solid var(--line);
        padding: 1.2rem 2rem;
        box-shadow: 0 -2px 12px rgba(0,0,0,.08);
        z-index: 1000;
    }
    .cookie-banner p { margin-bottom: .8rem; max-width: 700px; }
    .cookie-banner-botoes { display: flex; gap: .6rem; margin-top: 1rem; flex-wrap: wrap; }
    .btn-normal, .btn-alto, .btn-baixo {
        border: none; cursor: pointer; text-decoration: none;
        border-radius: 6px; font-weight: 500;
    }
    .btn-normal { padding: .6rem 1.2rem; background: #e2e4e9; color: #222; }
    .btn-alto { padding: .9rem 1.8rem; background: var(--primary); color: #fff; font-size: 1.05rem; }
    .btn-baixo { padding: .3rem .6rem; background: transparent; color: #888; font-size: .8rem; }
    .banner-empilhado .cookie-banner-botoes,
    .banner-empilhado.cookie-banner-botoes {
        display: grid; grid-template-columns: max-content max-content; gap: .6rem;
    }
    .banner-empilhado .btn-alto,
    .banner-empilhado.btn-alto { grid-column: 1 / -1; justify-self: start; }

    /* --- Hero da landing (welcome.blade.php) --- */
    .hero { padding: 4rem 0 3rem; }
    .hero h1 { font-size: 2.4rem; line-height: 1.25; max-width: 560px; }
    .hero p.lead { color: var(--ink-muted); max-width: 480px; }

    .hero-demo {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 6px;
        padding: 1.25rem;
        max-width: 420px;
    }
    .hero-demo p { font-size: .85rem; color: var(--ink-muted); margin-bottom: .9rem; }
    .hero-demo .btn-flagged {
        background: var(--primary);
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: .8rem 1.6rem;
        font-weight: 600;
        cursor: pointer;
        position: relative;
    }
    .hero-demo .btn-flagged.marcado { outline: 3px solid var(--highlight); outline-offset: 3px; }
    .hero-demo .nota {
        font-size: .78rem;
        color: var(--flag);
        margin-top: .6rem;
        display: none;
    }
    .hero-demo .nota.show { display: block; }

    .steps-list { list-style: none; padding: 0; counter-reset: etapa; }
    .steps-list li {
        counter-increment: etapa;
        padding: .9rem 0 .9rem 3rem;
        border-bottom: 1px solid var(--line);
        position: relative;
    }
    .steps-list li::before {
        content: counter(etapa);
        position: absolute;
        left: 0; top: .8rem;
        font-family: var(--font-head);
        color: var(--primary);
        font-weight: 600;
    }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/" class="wordmark"><span>Privacy</span>Lab</a>
            <nav>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 text-decoration-none" style="color:var(--ink-muted); margin-left:1.5rem;">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Entrar</a>
                @endauth
            </nav>
        </div>
    </header>
    <main>
        @if(session('mensagem'))
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show py-2 text-center" role="alert">
                            {{ session('mensagem') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
    <div class="container py-3">
        @yield('conteudo','')
    </div>
    <footer class="site-footer container text-center py-3">
        <p class="mb-0">Protótipo de apoio à privacy literacy — Projeto de pesquisa FAPESP</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>