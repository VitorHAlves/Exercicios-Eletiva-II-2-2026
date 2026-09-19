@extends('layout')

@section('titulo', 'Comparação final')

@section('conteudo')
    @php
        $atual = match ($variacao) {
            'A' => [
                'label' => 'Interface que você utilizou',
                'preview' => [
                    ['label' => 'ACEITAR TUDO', 'classe' => 'btn-alto'],
                    ['label' => 'Rejeitar', 'classe' => 'btn-baixo'],
                    ['label' => 'Configurar', 'classe' => 'btn-baixo'],
                ],
                'empilhado' => true,
            ],
            'B' => [
                'label' => 'Interface que você utilizou',
                'preview' => [
                    ['label' => 'ACEITAR TUDO', 'classe' => 'btn-alto'],
                    ['label' => 'Configurar preferências', 'classe' => 'btn-normal'],
                ],
                'empilhado' => false,
            ],
            'C' => [
                'label' => 'Interface que você utilizou',
                'preview' => [
                    ['label' => 'ACEITAR TUDO', 'classe' => 'btn-alto'],
                    ['label' => 'Configurar', 'classe' => 'btn-normal'],
                    ['label' => 'Não desejo aceitar', 'classe' => 'btn-baixo'],
                ],
                'empilhado' => false,
            ],
            default => [
                'label' => 'Interface que você utilizou',
                'preview' => [
                    ['label' => 'Aceitar', 'classe' => 'btn-normal'],
                    ['label' => 'Rejeitar', 'classe' => 'btn-normal'],
                    ['label' => 'Configurar', 'classe' => 'btn-normal'],
                ],
                'empilhado' => false,
            ],
        };
    @endphp

    <div class="text-center mb-4">
        <h2 class="fw-bold">⚖️ Comparando as interfaces</h2>
        <p class="text-muted">Observe as duas versões abaixo antes de responder.</p>
    </div>

    <div class="row g-4 justify-content-center align-items-stretch mb-4">
        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-danger-subtle text-danger-emphasis mb-2 align-self-start">{{ $atual['label'] }}</span>
            <div class="border rounded-3 p-3 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="small text-muted text-center mb-3">Utilizamos cookies para melhorar sua experiência...</p>
                <div class="cookie-banner-botoes justify-content-center {{ $atual['empilhado'] ? 'banner-empilhado' : '' }}" style="margin-top:0;">
                    @foreach ($atual['preview'] as $botao)
                        <span class="{{ $botao['classe'] }}">{{ $botao['label'] }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-success-subtle text-success-emphasis mb-2 align-self-start">Interface ideal</span>
            <div class="border rounded-3 p-3 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="small text-muted text-center mb-3">Utilizamos cookies para melhorar sua experiência...</p>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-outline-secondary flex-fill">Aceitar</button>
                    <button type="button" class="btn btn-outline-secondary flex-fill">Rejeitar</button>
                    <button type="button" class="btn btn-outline-secondary flex-fill">Configurar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <form class="border rounded-3 p-4 bg-white text-start">
                <p class="fw-semibold mb-3">
                    Qual das interfaces permite identificar e acessar mais facilmente todas as alternativas disponíveis?
                </p>

                <div class="list-group mb-4">
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="resposta_final" value="assimetrica">
                        A interface que utilizei
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="resposta_final" value="equilibrada">
                        A interface ideal
                    </label>
                </div>

                <a href="{{ route('cenario.index') }}" class="btn btn-primary w-100">Concluir e voltar ao lobby</a>
            </form>
        </div>
    </div>
@endsection