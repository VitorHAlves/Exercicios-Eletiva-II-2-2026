@extends('layout')

@section('titulo', 'Lobby de Cenários')

@section('conteudo')
    @php
        $cartoes = [
            [
                'variacao' => 'referencia',
                'titulo' => 'Versão de Referência',
                'descricao' => 'Alternativas com destaque e acesso equilibrados.',
            ],
            [
                'variacao' => 'A',
                'titulo' => 'Variação A',
                'descricao' => 'Destaque para "Aceitar Tudo".',
            ],
            [
                'variacao' => 'B',
                'titulo' => 'Variação B',
                'descricao' => '"Rejeitar" não aparece no primeiro nível.',
            ],
            [
                'variacao' => 'C',
                'titulo' => 'Variação C',
                'descricao' => 'Observe como a linguagem das opções pode influenciar sua decisão.',
            ],
        ];
    @endphp

    <div class="text-center mb-5">
        <h1 class="fw-bold">🍪 Lobby de Cenários</h1>
        <p class="text-muted">
            Escolha uma versão do banner de cookies para observar.
        </p>
    </div>

    <div class="row g-4 justify-content-center">
        @foreach ($cartoes as $cartao)
            @php
                $respondido = in_array(
                    $cartao['variacao'],
                    $variacoesRespondidas
                );
            @endphp

            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title">
                            {{ $cartao['titulo'] }}
                        </h5>

                        <p class="card-text text-muted small flex-grow-1">
                            {{ $cartao['descricao'] }}
                        </p>

                        <a
                            href="{{ route('cenario.show', $cartao['variacao']) }}"
                            class="btn btn-primary mt-2"
                        >
                            Iniciar cenário
                        </a>

                        @if ($respondido)
                            <a
                                href="{{ route('cenario.show', $cartao['variacao']) }}"
                                class="btn btn-outline-primary mt-2"
                            >
                                Refazer cenário
                            </a>
                        @else
                            <button
                                type="button"
                                class="btn btn-outline-primary mt-2"
                                disabled
                            >
                                Refazer cenário
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection