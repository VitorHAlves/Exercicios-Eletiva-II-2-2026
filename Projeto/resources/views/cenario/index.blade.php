@extends('layout')

@section('titulo', 'Lobby de Cenários')

@section('conteudo')
    <div class="text-center mb-5">
        <h1 class="fw-bold">🍪 Lobby de Cenários</h1>
        <p class="text-muted">Escolha uma versão do banner de cookies para observar</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">Versão de Referência</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        Alternativas com destaque e acesso equilibrados.
                    </p>
                    <a href="{{ route('cenario.show', 'referencia') }}" class="btn btn-outline-primary mt-2">
                        Entrar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">Variação A</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        Destaque para "Aceitar Tudo".
                    </p>
                    <a href="{{ route('cenario.show', 'A') }}" class="btn btn-primary mt-2">
                        Entrar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">Variação B</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        "Rejeitar" some do primeiro nível.
                    </p>
                    <a href="{{ route('cenario.show', 'B') }}" class="btn btn-primary mt-2">
                        Entrar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">Variação C</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        "Rejeitar" existe, mas menos visível.
                    </p>
                    <a href="{{ route('cenario.show', 'C') }}" class="btn btn-primary mt-2">
                        Entrar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection