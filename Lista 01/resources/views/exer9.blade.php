@extends('layout')
@section('titulo', 'Exercicio 9')
@section('conteudo')
<h1>Exercico 9</h1>
<form method="post" action="/exer9resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o raio do círculo: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($area)
            <p>A área desse círculo é: {{$area}}</p>
        @endisset
@endsection
