@extends('layout')
@section('titulo', 'Exercicio 12')
@section('conteudo')
<h1>Exercico 12</h1>
<form method="post" action="/exer12resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe a base: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o expoente: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($result)
            <p>O resultado é: {{$result}}</p>
        @endisset
@endsection
