@extends('layout')
@section('titulo', 'Exercicio 19')
@section('conteudo')
<h1>Exercico 19</h1>
<form method="post" action="/exer19resp">
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe um valor em dais: </label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
        @isset($horas,$minutos,$segundos)
            <p>Horas:{{$horas}}</p>
            <p>Minutos: {{$minutos}}</p>
            <p>Segundos: {{$segundos}}</p>
        @endisset
@endsection
