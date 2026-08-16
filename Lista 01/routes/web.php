<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1',[ExercicioController::class,'abrirFormExer1'] );
Route::post('/exer1resp',[ExercicioController::class,'respostaExer1']);

Route::get('/exer2',[ExercicioController::class,'abrirFormExer2']);
Route::post('/exer2resp',[ExercicioController::class,'respostaExer2']);

Route::get('/exer3',[ExercicioController::class,'abrirFormExer3']);
Route::post('/exer3resp',[ExercicioController::class,'respostaExer3']);

Route::get('/exer4',[ExercicioController::class,'abrirFormExer4']);
Route::post('/exer4resp',[ExercicioController::class,'respostaExer4']);

Route:: get('/exer5',[ExercicioController::class,'abrirFormExer5']);
Route:: post('/exer5resp',[ExercicioController::class,'respostaExer5']);

Route::get('/exer6',[ExercicioController::class,'abrirFormExer6']);
Route::post('/exer6resp',[ExercicioController::class,'respostaExer6']);

Route::get('/exer7',[ExercicioController::class,'abrirFormExer7']);
Route::post('/exer7resp',[ExercicioController::class,'respostaExer7']);

Route::get('/exer8',[ExercicioController::class,'abrirFormExer8']);
Route::post('/exer8resp',[ExercicioController::class,'respostaExer8']);

Route::get('/exer9',[ExercicioController::class,'abrirFormExer9']);
Route::post('/exer9resp',[ExercicioController::class,'respostaExer9']);

Route::get('/exer10',[ExercicioController::class,'abrirFormExer10']);
Route::post('/exer10resp',[ExercicioController::class,'respostaExer10']);

Route:: get('/exer11',[ExercicioController::class,'abrirFormExer11']);
Route::post('/exer11resp',[ExercicioController::class,'respostaExer11']);

Route::get('/exer12',[ExercicioController::class, 'abrirFormExer12']);
Route::post('/exer12resp',[ExercicioController::class,'respostaExer12']);

Route::get('/exer13', [ExercicioController::class, 'abrirFormExer13']);
Route::post('/exer13resp',[ExercicioController::class,'respostaExer13']);

Route::get('/exer14',[ExercicioController::class,'abrirFormExer14']);
Route::post('/exer14resp',[ExercicioController::class,'respostaExer14']);

Route::get('/exer15',[ExercicioController::class,'abrirFormExer15']);
Route::post('/exer15resp',[ExercicioController::class,'respostaExer15']);

Route::get('/exer16',[ExercicioController::class,'abrirFormExer16']);
Route::post('/exer16resp',[ExercicioController::class,'respostaExer16']);

Route:: get('/exer17',[ExercicioController::class, 'abrirFormExer17']);
Route::post('/exer17resp',[ExercicioController::class,'respostaExer17']);

Route::get('/exer18',[ExercicioController::class,'abrirFormExer18']);
Route::post('/exer18resp',[ExercicioController::class, 'respostaExer18']);

Route::get('/exer19',[ExercicioController::class,'abrirFormExer19']);
Route::post('/exer19resp',[ExercicioController::class, 'respostaExer19']);

Route::get('/exer20',[ExercicioController::class,'abrirFormExer20']);
Route::post('/exer20resp',[ExercicioController::class,'respostaExer20']);;