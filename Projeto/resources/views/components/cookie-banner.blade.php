@props(['botoes'])

<div class="cookie-banner">
    <div class="d-flex align-items-start gap-3">
        <span style="font-size:1.8rem;">🍪</span>
        <div class="flex-grow-1">
            <p class="fw-bold mb-1">Nós valorizamos sua privacidade</p>
            <p class="mb-2 text-muted small">
                Utilizamos cookies e tecnologias semelhantes para melhorar sua experiência de navegação,
                exibir conteúdos personalizados, analisar o tráfego do site e otimizar nossos serviços.
                Você pode aceitar todos os cookies, rejeitar os não essenciais, ou configurar suas
                preferências individualmente. Para saber mais, consulte nossa
                <a href="#" class="link-secondary">Política de Cookies</a>.
            </p>

            <div class="cookie-banner-botoes">
                @foreach ($botoes as $botao)
                    @if (isset($botao['link']))
                        <a href="{{ $botao['link'] }}" class="btn-{{ $botao['destaque'] ?? 'normal' }}">
                            {{ $botao['label'] }}
                        </a>
                    @else
                        <form action="{{ route('cenario.store') }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" name="escolha" value="{{ $botao['valor'] }}" class="btn-{{ $botao['destaque'] ?? 'normal' }}">
                                {{ $botao['label'] }}
                            </button>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>