@extends('layout')

@section('titulo', 'login')

@section('conteudo')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h2 class="mb-0">Criar Conta</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }} </p>
                            @endforeach
                        </div>
                    @endif

                    <form action="/register" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-labbel">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-labbel">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-labbel">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-labbel">Confirme a senha</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"> Cadastrar</button>
                        </div>
                        <div class="text-center mt-3">
                            <p class="mb-0">Já possui uma conta? <a href="/login">Fazer Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection