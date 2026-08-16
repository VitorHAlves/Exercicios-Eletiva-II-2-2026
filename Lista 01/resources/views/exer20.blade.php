@extends('layout')
@section('titulo', 'Exercicio 20')
@section('conteudo')
<h1>Exercico 20</h1>
<form method="post" action="/exer20resp">
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe a distância(em km): </label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o tempo(em horas): </label>
        <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($vm)
            <p>A velocidade média é de: {{$vm}}km/h.</p>
        @endisset
@endsection
