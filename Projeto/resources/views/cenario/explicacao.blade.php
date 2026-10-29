@extends('layout')

@section('titulo', 'Explicação')

@section('conteudo')
    @php
        $info = match ($variacao) {//switch
            'A' => [
                'mecanismo' => 'Interferência visual',
                'texto' => 'O botão "Aceitar Tudo" recebeu mais destaque — maior, colorido e centralizado — enquanto "Rejeitar" e "Configurar" ficaram discretos. Isso induz o usuário a clicar na opção destacada sem considerar as alternativas com a mesma atenção.',
                'preview' => [
                    ['label' => 'Aceitar Tudo', 'classe' => 'btn-alto'],
                    ['label' => 'Rejeitar', 'classe' => 'btn-baixo'],
                    ['label' => 'Configurar', 'classe' => 'btn-baixo'],
                ],
            ],
            'B' => [
                'mecanismo' => 'Obstrução e Efeito Padrão',
                'texto' => 'A opção "Rejeitar" não aparece no primeiro nível do banner. Para recusar os cookies, o usuário precisa entrar em "Configurar preferências" e navegar mais, exigindo mais esforço do que aceitar. Além disso, as opções de Analíticos e Marketing já vêm marcadas por padrão dentro das configurações.',
                'preview' => [
                    ['label' => 'Aceitar Tudo', 'classe' => 'btn-alto'],
                    ['label' => 'Configurar preferências', 'classe' => 'btn-normal'],
                ],
            ],
            'C' => [
                'mecanismo' => 'Confirmshaming',
                'texto' => 'As opções usam uma linguagem que associa aceitar cookies a uma escolha positiva e rejeitar a uma experiência inferior. Isso
                pode provocar culpa ou um receio de perder benefícios, pressionando o usuário a aceitar. Rejeitar cookies opcionais deve preservar as funcionalidades
                essenciais do site.',
                'preview' => [
                    ['label' => 'Sim, quero melhorar minha experiência', 'classe' => 'btn-normal'],
                    ['label' => 'Não, prefiro uma experiência limitada', 'classe' => 'btn-normal'],
                    ['label' => 'Configurar preferências', 'classe' => 'btn-normal'],
                ],
            ],
            default => [
                'mecanismo' => 'Nenhum padrão enganoso identificado',
                'texto' => 'As três opções — Aceitar, Rejeitar e Configurar — tiveram o mesmo destaque visual e exigiram o mesmo esforço para serem localizadas e utilizadas.',
                'preview' => [
                    ['label' => 'Aceitar', 'classe' => 'btn-normal'],
                    ['label' => 'Rejeitar', 'classe' => 'btn-normal'],
                    ['label' => 'Configurar', 'classe' => 'btn-normal'],
                ],
            ],
        };
    @endphp

    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="fw-bold mb-1"> O que estava acontecendo</h2>

            <div class="border rounded-3 p-3 mb-3 bg-white">
                <p class="text-muted small mb-2">Representação do banner que você utilizou:</p>
                <div class="cookie-banner-botoes {{ $variacao === 'A' ? 'banner-empilhado': ''}}">
                    @foreach ($info['preview'] as $botao)
                        <span class="{{ $botao['classe'] }}">{{ $botao['label'] }}</span>
                    @endforeach
                </div>
            </div>

            @forelse ($cenario->mecanismos as $mecanismo)
                <div class="mb-3">
                    <h3 class="h5">{{ $mecanismo->nome }}</h3>
                    <p>{{ $mecanismo->pivot->explicacao }}</p>
                </div>
                @empty
                    <p> Esta versão apresenta alternativas equilibradas,sem mecanismos de padrões enganosos associados.</p>
            @endforelse

            <div class="alert alert-secondary mt-4">
                 Ao analisar banners de cookies, observe se as alternativas possuem condições semelhantes de destaque e acesso.
            </div>

            <a href="{{ route('cenario.comparacao') }}" class="btn btn-primary">Continuar para comparação</a>
        </div>
    </div>
@endsection