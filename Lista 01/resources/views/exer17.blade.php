@extends('layout')
@section('titulo', 'Exercicio 17')
@section('conteudo')
<h1>Exercico 17</h1>
<form method="post" action="/exer17resp">
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe um capital: </label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="valor2" class="form-label">Informe uma taxa de juros: </label>
        <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="valor3" class="form-label">Informe um período(em meses): </label>
        <input type="number" id="valor3" name="valor3" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($juros)
            <p>O juros simples é de: R${{$juros}}.</p>
        @endisset
@endsection
