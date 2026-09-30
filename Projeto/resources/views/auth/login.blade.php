@extends('layout')

@section('titulo', 'login')

@section('conteudo')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h2 class="mb-0">Login</h2>
                </div>
                <div class="card-body">
                    @if ($erros->any())
                        <div class=""alert alert-danger>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }} </p>
                            @endforeach
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-labbel">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-labbel">E-mail</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"> Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>