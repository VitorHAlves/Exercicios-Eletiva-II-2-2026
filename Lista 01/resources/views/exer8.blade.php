@extends('layout')
@section('titulo', 'Exercicio 8')
@section('conteudo')
<h1>Exercico 8</h1>
<form method="post" action="/exer8resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe a base do retangulo: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe a altura do retangulo: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($area)
            <p>A área desse retângulo é: {{$area}}</p>
        @endisset
@endsection
