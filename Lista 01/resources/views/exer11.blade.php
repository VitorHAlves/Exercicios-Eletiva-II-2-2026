@extends('layout')
@section('titulo', 'Exercicio 11')
@section('conteudo')
<h1>Exercico 11</h1>
<form method="post" action="/exer11resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o raio do círculo: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($perimetro)
            <p>O perimetro desse círculo é: {{$perimetro}}</p>
        @endisset
@endsection
