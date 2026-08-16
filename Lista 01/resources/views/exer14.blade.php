@extends('layout')
@section('titulo', 'Exercicio 14')
@section('conteudo')
<h1>Exercico 14</h1>
<form method="post" action="/exer14resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor em km: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($milhas)
            <p>O resultado em milhas é: {{$milhas}}.</p>
        @endisset
@endsection
