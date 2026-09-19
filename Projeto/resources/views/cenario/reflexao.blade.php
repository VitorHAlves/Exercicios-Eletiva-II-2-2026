@extends('layout')

@section('titulo', 'Reflexão')

@section('conteudo')
    <div class="row justify-content-center">
        <div class="col-md-7 text-center">
            <span style="font-size:2.5rem;"></span>
            <h2 class="fw-bold mb-1">O que você percebeu?</h2>
            <p class="text-muted mb-4">Antes de continuar, pense sobre a interface que você acabou de utilizar.</p>

            <form action="{{ route('cenario.reflexao.salvar') }}" method="POST" class="text-start">
                @csrf

                <div class="list-group mb-4">
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="percepcao" value="mesmo_destaque" required>
                        As opções receberam o mesmo destaque.
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="percepcao" value="uma_chamou_atencao">
                        Uma opção chamou mais minha atenção.
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="percepcao" value="dificil_localizar">
                        Foi mais difícil localizar uma alternativa.
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="percepcao" value="mais_etapas">
                        Foi necessário realizar mais etapas para chegar a determinada opção.
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="percepcao" value="sem_diferenca">
                        Não percebi diferença.
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Continuar</button>
            </form>
        </div>
    </div>
@endsection