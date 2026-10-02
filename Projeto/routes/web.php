<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CenarioController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


//Login com breeze

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::get('/register',[AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register',[AuthController::class,'register']);
//protejo todas as rotas aqui usando o middleware..
Route::middleware('auth')->group(function(){//middleware-> não deixa acessar a uma tela antes de passar pela autenticação de login
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::get('/cenario/configuracoes', [CenarioController::class, 'configuracoes'])->name('cenario.configuracoes');
    Route::post('/cenario/configuracoes',[CenarioController::class, 'salvarConfiguracoes'])->name('cenario.configuracoes.salvar');
    Route::get('/cenario/reflexao', [CenarioController::class, 'reflexao'])->name('cenario.reflexao');
    Route::post('/cenario/reflexao',[CenarioController::class,'salvarReflexao'])->name('cenario.reflexao.salvar');
    Route::get('/cenario/explicacao',[CenarioController::class, 'explicacao'])->name('cenario.explicacao');
    Route::get('/cenario/comparacao', [CenarioController::class, 'comparacao'])->name('cenario.comparacao');
    Route::resource('cenario',CenarioController::class);
    Route::post('/logout', [AuthController::class,'logout']);
});
