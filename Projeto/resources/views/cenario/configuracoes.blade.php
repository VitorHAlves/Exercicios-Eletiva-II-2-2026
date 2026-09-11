@extends('layout')

@section('titulo', 'Configurar preferências')

@section('conteudo')
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="fw-bold mb-1">🍪 Preferências de cookies</h2>
            <p class="text-muted mb-4">Escolha quais categorias de cookies você permite.</p>

            <form action="{{ route('cenario.configuracoes.salvar') }}" method="POST">
                @csrf

                <div class="border rounded-3 p-3 mb-3 bg-white">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked disabled>
                        <label class="form-check-label fw-semibold">Necessários</label>
                    </div>
                    <p class="text-muted small mb-0">Essenciais para o funcionamento do site. Não podem ser desativados.</p>
                </div>

                <div class="border rounded-3 p-3 mb-3 bg-white">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="analiticos" value="1" id="analiticos">
                        <label class="form-check-label fw-semibold" for="analiticos">Analíticos</label>
                    </div>
                    <p class="text-muted small mb-0">Ajudam a entender como você usa o site, de forma anônima.</p>
                </div>

                <div class="border rounded-3 p-3 mb-3 bg-white">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="marketing" value="1" id="marketing">
                        <label class="form-check-label fw-semibold" for="marketing">Marketing</label>
                    </div>
                    <p class="text-muted small mb-0">Usados para exibir anúncios personalizados em outros sites.</p>
                </div>

                <div class="border rounded-3 p-3 mb-4 bg-white">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="personalizacao" value="1" id="personalizacao">
                        <label class="form-check-label fw-semibold" for="personalizacao">Personalização</label>
                    </div>
                    <p class="text-muted small mb-0">Adaptam conteúdos e recomendações ao seu perfil.</p>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Salvar preferências</button>
                    <a href="{{ route('cenario.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection