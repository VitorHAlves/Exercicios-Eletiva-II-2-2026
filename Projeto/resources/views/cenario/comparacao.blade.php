@extends('layout')

@section('titulo', 'Comparação final')

@section('conteudo')
    @php
        $atual = match ($variacao) {
            'A' => [
                'preview' => [
                    ['label' => 'ACEITAR TUDO', 'classe' => 'btn-alto'],
                    ['label' => 'Rejeitar', 'classe' => 'btn-baixo'],
                    ['label' => 'Configurar', 'classe' => 'btn-baixo'],
                ],
                'empilhado' => true,
            ],
            'B' => [
                'preview' => [
                    ['label' => 'ACEITAR TUDO', 'classe' => 'btn-alto'],
                    ['label' => 'Configurar preferências', 'classe' => 'btn-normal'],
                ],
                'empilhado' => false,
            ],
            'C' => [
                'preview' => [
                    ['label' => 'Sim, quero melhorar minha experiência', 'classe' => 'btn-normal'],
                    ['label' => 'Não, prefiro uma experiência limitada', 'classe' => 'btn-normal'],
                    ['label' => 'Configurar preferências', 'classe' => 'btn-normal'],
                ],
                'empilhado' => false,
            ],
            default => [
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
        <h2 class="fw-bold">Comparando as interfaces</h2>
        <p class="text-muted">
            Observe as duas versões abaixo antes de responder.
        </p>
    </div>

    <div class="row g-4 justify-content-center align-items-stretch mb-4">
        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-secondary-subtle text-secondary-emphasis mb-2 align-self-start">
                Versão que você utilizou
            </span>

            <div class="border rounded-3 p-3 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="small text-muted text-center mb-3">
                    Utilizamos cookies para melhorar sua experiência...
                </p>

                <div
                    class="cookie-banner-botoes justify-content-center {{ $atual['empilhado'] ? 'banner-empilhado' : '' }}"
                    style="margin-top: 0;"
                >
                    @foreach ($atual['preview'] as $botao)
                        <span class="{{ $botao['classe'] }}">
                            {{ $botao['label'] }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-secondary-subtle text-secondary-emphasis mb-2 align-self-start">
                Versão de referência
            </span>

            <div class="border rounded-3 p-3 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="small text-muted text-center mb-3">
                    Utilizamos cookies para melhorar sua experiência...
                </p>

                <div class="cookie-banner-botoes justify-content-center" style="margin-top: 0;">
                    <span class="btn-normal">Aceitar</span>
                    <span class="btn-normal">Rejeitar</span>
                    <span class="btn-normal">Configurar</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <form class="border rounded-3 p-4 bg-white text-start">
                <fieldset>
                    <legend class="h5 mb-2">
                        Qual versão apresenta as opções de forma mais clara
                        e permite decidir com menos pressão?
                    </legend>

                    <p class="text-muted small mb-3">
                        Escolha a alternativa que melhor representa sua avaliação.
                    </p>

                    <div class="list-group mb-4">
                        <label class="list-group-item">
                            <input
                                class="form-check-input me-2"
                                type="radio"
                                name="resposta_final"
                                value="utilizada"
                            >
                            A versão que utilizei.
                        </label>

                        <label class="list-group-item">
                            <input
                                class="form-check-input me-2"
                                type="radio"
                                name="resposta_final"
                                value="referencia"
                            >
                            A versão de referência.
                        </label>

                        <label class="list-group-item">
                            <input
                                class="form-check-input me-2"
                                type="radio"
                                name="resposta_final"
                                value="equivalentes"
                            >
                            As duas parecem equivalentes.
                        </label>

                        <label class="list-group-item">
                            <input
                                class="form-check-input me-2"
                                type="radio"
                                name="resposta_final"
                                value="nao_sei"
                            >
                            Não sei dizer.
                        </label>
                    </div>
                </fieldset>

                <a href="{{ route('cenario.index') }}" class="btn btn-primary w-100">
                    Concluir e voltar ao lobby
                </a>
            </form>
        </div>
    </div>
@endsection