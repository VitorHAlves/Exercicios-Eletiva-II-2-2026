@extends('layout')

@section('titulo', 'Comparação final')

@section('conteudo')
    <div class="text-center mb-4">
        <h2 class="fw-bold">Comparando as interfaces</h2>
        <p class="text-muted">Observe as duas versões abaixo antes de responder.</p>
    </div>

    <div class="row g-4 justify-content-center align-items-stretch mb-4">
        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-danger-subtle text-danger-emphasis mb-2 align-self-start">Interface assimétrica</span>
            <div class="border rounded-3 p-3 bg-white shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="small text-muted text-center mb-3">Utilizamos cookies para melhorar sua experiência...</p>
                <div class="d-flex flex-column align-items-center gap-2">
                    <button type="button" class="btn btn-primary btn-lg fw-bold px-5">
                        ACEITAR
                    </button>
                    <div class="d-flex gap-3 mt-1">
                        <a href="#" class="text-muted small text-decoration-none opacity-50">Rejeitar</a>
                        <a href="#" class="text-muted small text-decoration-none opacity-50">Configurar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 d-flex flex-column">
            <span class="badge bg-success-subtle text-success-emphasis mb-2 align-self-start">Interface analisada</span>
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
                        A interface assimétrica
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-2" type="radio" name="resposta_final" value="equilibrada">
                        A interface analisada
                    </label>
                </div>

                <a href="{{ route('cenario.index') }}" class="btn btn-primary w-100">Concluir e voltar ao lobby</a>
            </form>
        </div>
    </div>
@endsection