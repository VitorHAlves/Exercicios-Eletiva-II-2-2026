@extends('layout')

@section('titulo', 'Cenário — ' . $variacao)

@section('conteudo')
    <nav class="navbar navbar-expand-lg navbar-dark mb-4 rounded-3 px-3" style="background: #1a1d29;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <span style="font-size:1.4rem;">💻</span> DevCentral
            </a>
            <ul class="navbar-nav flex-row gap-4 ms-auto">
                <li class="nav-item"><a class="nav-link text-light-emphasis" href="#">Fóruns</a></li>
                <li class="nav-item"><a class="nav-link text-light-emphasis" href="#">Tutoriais</a></li>
                <li class="nav-item"><a class="nav-link text-light-emphasis" href="#">Vagas</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">Entrar</a></li>
            </ul>
        </div>
    </nav>

    <div class="p-5 mb-4 rounded-3 text-white" style="background: linear-gradient(135deg, #2b6cb0, #1a1d29);">
        <h1 class="fw-bold mb-2">Bem-vindo ao maior fórum de devs do Brasil</h1>
        <p class="mb-0 opacity-75">Discussões, dúvidas e novidades sobre programação, todos os dias.</p>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <h5 class="fw-bold mb-3">🔥 Tópicos em alta</h5>

            @php
                $topicos = [
                    ['titulo' => 'Como vocês organizam rotas em projetos Laravel grandes?', 'categoria' => 'Laravel', 'autor' => 'dev_ana', 'respostas' => 24],
                    ['titulo' => 'Vale a pena migrar de REST pra GraphQL em 2026?', 'categoria' => 'Backend', 'autor' => 'carlos.silva', 'respostas' => 41],
                    ['titulo' => 'Dica: usando Blade Components pra evitar duplicação de HTML', 'categoria' => 'PHP', 'autor' => 'marina_dev', 'respostas' => 12],
                    ['titulo' => 'Discussão: frameworks CSS ainda fazem sentido com Tailwind?', 'categoria' => 'Frontend', 'autor' => 'joao99', 'respostas' => 33],
                ];
            @endphp

            @foreach ($topicos as $topico)
                <div class="d-flex justify-content-between align-items-start border-bottom py-3">
                    <div>
                        <span class="badge bg-primary-subtle text-primary-emphasis mb-1">{{ $topico['categoria'] }}</span>
                        <p class="mb-1 fw-semibold">{{ $topico['titulo'] }}</p>
                        <p class="text-muted small mb-0">por {{ $topico['autor'] }}</p>
                    </div>
                    <span class="text-muted small text-nowrap ms-3">{{ $topico['respostas'] }} respostas</span>
                </div>
            @endforeach
        </div>

        <div class="col-lg-4">
            <div class="bg-white border rounded-3 p-3 mb-3">
                <h6 class="fw-bold">Categorias</h6>
                <ul class="list-unstyled small text-muted mb-0">
                    <li class="mb-2">📘 Backend</li>
                    <li class="mb-2">🎨 Frontend</li>
                    <li class="mb-2">🐘 PHP / Laravel</li>
                    <li class="mb-0">🛠️ DevOps</li>
                </ul>
            </div>
            <div class="bg-white border rounded-3 p-3">
                <h6 class="fw-bold">Membros online</h6>
                <p class="small text-muted mb-0">1.204 devs navegando agora</p>
            </div>
        </div>
    </div>

    @php
        $botoes = match ($variacao) {
            'referencia' => [
                ['label' => 'Aceitar', 'valor' => 'aceitar', 'destaque' => 'normal'],
                ['label' => 'Rejeitar', 'valor' => 'rejeitar', 'destaque' => 'normal'],
                ['label' => 'Configurar', 'link' => route('cenario.configuracoes'), 'destaque' => 'normal'],
            ],
            'A' => [
                ['label' => 'Aceitar Tudo', 'valor' => 'aceitar', 'destaque' => 'alto'],
                ['label' => 'Rejeitar', 'valor' => 'rejeitar', 'destaque' => 'baixo'],
                ['label' => 'Configurar', 'link' => route('cenario.configuracoes'), 'destaque' => 'baixo'],
            ],
            default => [],
        };
    @endphp

    <x-cookie-banner :botoes="$botoes" />
@endsection