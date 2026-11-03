@extends('layout')

@section('titulo', 'Reflexão')

@section('conteudo')
    @php
        $ehC = session('cookie_variacao') === 'C';

        $pergunta = $ehC
            ? 'Como você percebeu a linguagem usada nas opções?'
            : 'Qual aspecto mais chamou sua atenção ao escolher?';

        $opcoes = $ehC
            ? [
                'aceitar_beneficios' => 'Aceitar pareceu trazer benefícios.',
                'recusar_desvantagens' => 'Recusar pareceu trazer desvantagens.',
                'linguagem_neutra' => 'As duas opções pareceram neutras.',
                'nao_observou_texto' => 'Não prestei atenção ao texto.',
                'nao_sei' => 'Não sei dizer.',
            ]
            : [
                'destaque_visual' => 'O destaque visual de uma das opções.',
                'localizacao_opcao' => 'A facilidade ou dificuldade para encontrar uma opção.',
                'quantidade_etapas' => 'A quantidade de etapas para concluir minha escolha.',
                'opcoes_semelhantes' => 'As opções pareceram semelhantes em destaque e acesso.',
                'nao_sei' => 'Não sei dizer.',
            ];
    @endphp

    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="fw-bold mb-2 text-center">O que você percebeu?</h2>

            <p class="text-muted mb-4 text-center">
                Antes de continuar, pense sobre a interface que você acabou de utilizar.
                Não há resposta certa ou errada nesta etapa.
            </p>

            <form action="{{ route('cenario.reflexao.salvar') }}" method="POST">
                @csrf

                <fieldset>
                    <legend class="h5 mb-2">{{ $pergunta }}</legend>

                    <p class="text-muted small mb-3">
                        Escolha a alternativa que melhor representa sua percepção.
                    </p>

                    <div class="list-group mb-4">
                        @foreach ($opcoes as $valor => $texto)
                            <label class="list-group-item">
                                <input
                                    class="form-check-input me-2"
                                    type="radio"
                                    name="percepcao"
                                    value="{{ $valor }}"
                                    @checked(old('percepcao') === $valor)
                                    required
                                >
                                {{ $texto }}
                            </label>
                        @endforeach
                    </div>
                </fieldset>

                @error('percepcao')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-primary w-100">
                    Continuar
                </button>
            </form>
        </div>
    </div>
@endsection