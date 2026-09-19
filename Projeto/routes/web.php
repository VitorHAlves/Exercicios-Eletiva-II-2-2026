<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cenario/configuracoes', [CenarioController::class, 'configuracoes'])->name('cenario.configuracoes');
Route::post('/cenario/configuracoes',[CenarioController::class, 'salvarConfiguracoes'])->name('cenario.configuracoes.salvar');
Route::get('/cenario/reflexao', [CenarioController::class, 'reflexao'])->name('cenario.reflexao');
Route::post('/cenario/reflexao',[CenarioController::class,'salvarReflexao'])->name('cenario.reflexao.salvar');
Route::get('/cenario/explicacao',[CenarioController::class, 'explicacao'])->name('cenario.explicacao');
Route::get('/cenario/comparacao', [CenarioController::class, 'comparacao'])->name('cenario.comparacao');
Route::resource('cenario',CenarioController::class);