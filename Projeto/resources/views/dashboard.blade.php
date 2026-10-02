@extends('layout')

@section('titulo', 'Dashboard')

@section('conteudo')
    <div class="text-center mb-4">
        <h2 class="fw-bold">Bem-vindo, {{ auth()->user()->name }}!</h2>
        <p class="text-muted">Escolha uma área para explorar.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="card-title">🍪 Cenário: Banners de Cookies</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        Explore os exemplos de padrões enganosos em banners de cookies.
                    </p>
                    <a href="{{ route('cenario.index') }}" class="btn btn-primary mt-2">Acessar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">Sair</button>
        </form>
    </div>
@endsection