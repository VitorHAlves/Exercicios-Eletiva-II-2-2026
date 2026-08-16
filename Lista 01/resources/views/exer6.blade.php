@extends('layout')
@section('titulo', 'Exercicio 6')
@section('conteudo')
<h1>Exercico 6</h1>
<form method="post" action="/exer6resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe a temperatura em Celsius</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
        </form>
        @isset($fahr)
            <p>A temperatura convertida em Fahrenheit é: {{$fahr}}</p>
        @endisset
@endsection
