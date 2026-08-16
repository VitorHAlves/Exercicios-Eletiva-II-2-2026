@extends('layout')
@section('titulo', 'Exercicio 13')
@section('conteudo')
<h1>Exercico 13</h1>
<form method="post" action="/exer13resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor em metros: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($cm)
            <p>O resultado é: {{$cm}} cm.</p>
        @endisset
@endsection
