@extends('layout')
@section('titulo', 'Exercicio 5')
@section('conteudo')
<h1>Exercico 5</h1>
<form method="post" action="/exer5resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o primeiro valor</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o segundo valor</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor3" class="form-label">Informe o terceiro valor</label>
                <input type="number" id="valor3" name="valor3" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($media)
            <p>A media é: {{$media}}</p>
        @endisset
@endsection
