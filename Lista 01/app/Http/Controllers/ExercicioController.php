<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function abrirFormExer1(){
        return view('exer1');
    }
    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1',['soma' => $soma]);
    }

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 - $valor2;
        return view('exer2',['result' => $result]);
    }

    public function abrirFormExer3(){
        return view('exer3');
    }
    
    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $result = $valor1 * $valor2;
        return view('exer3',['result' => $result]);
    }

    public function abrirFormExer4(){
        return view('exer4');
    }
    
    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 == 0){
            $erro = "Não é possivel dividir por zero!";
            return view('exer4',['erro' => $erro]);
        }
        else{
            $divisao = $valor1 / $valor2;
            return view('exer4',['divisao' => $divisao]);
        }    
    }
    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $media = ($valor1 + $valor2 + $valor3) / 3;
        return view('exer5',['media' => $media]);
    }
    public function abrirFormExer6(){
        return view('exer6');
    }
    public function respostaExer6(Request $request){
        $celsius = $request->valor1;
        $fahr = $celsius * 1.8 +32;
        return view('exer6',['fahr' => $fahr]);
    }

    public function abrirFormExer7(){
        return view('exer7');
    }
    public function respostaExer7(Request $request){
        $fahr = $request -> valor1;
        $celsius = ($fahr - 32) * (5/9);
        return view('exer7',['celsius' => $celsius]);
    }
    
    public function abrirFormExer8(){
        return view('exer8');
    }
    public function respostaExer8(Request $request){
        $base = $request -> valor1;
        $altura = $request -> valor2;
        $area = $base * $altura;
        return view('exer8',['area' => $area]);
    }
    public function abrirFormExer9(){
        return view('exer9');
    }
    public function respostaExer9(Request $request){
        $raio = $request -> valor1;
        $area = ($raio ** 2) * 3.14;
        return view('exer9',['area' => $area]);
    }
    public function abrirFormExer10(){
        return view('exer10');
    }
    public function respostaExer10(Request $request){
        $largura = $request ->valor1;
        $altura = $request -> valor2;
        $perimetro = 2 * ($largura + $altura);
        return view('exer10',['perimetro' => $perimetro]);
    }
    public function abrirFormExer11(){
        return view('exer11');
    }
    public function respostaExer11(Request $request){
        $raio = $request -> valor1;
        $perimetro = 2 * 3.14 * $raio;
        return view('exer11',['perimetro' => $perimetro]);
    }
    public function abrirFormExer12(){
        return view('exer12');
    }
    public function respostaExer12(Request $request){
        $base = $request -> valor1;
        $expoente = $request ->valor2;
        $result = $base ** $expoente;
        return view('exer12',['result' => $result]);
    }
    public function abrirFormExer13(){
        return view('exer13');
    }
    public function respostaExer13(Request $request){
        $metros = $request -> valor1;
        $cm = $metros * 100;
        return view('exer13',['cm' => $cm]);
    }
    public function abrirFormExer14(){
        return view('exer14');
    }
    public function respostaExer14(Request $request){
        $km = $request -> valor1;
        $milhas = $km * 0.6213712;
        return view('exer14',['milhas' => $milhas]);
    }
    public function abrirFormExer15(){
        return view('exer15');
    }
    public function respostaExer15(Request $request){
        $peso = $request -> valor1;
        $altura = $request -> valor2;
        $imc = $peso / $altura ** 2;
        return view('exer15',['imc' => $imc]);
    }
    public function abrirFormExer16(){
        return view('exer16');
    }
    public function respostaExer16(Request $request){
        $preco = $request -> valor1;
        $desconto = $request -> valor2;
        $ajust = $preco - $preco * ($desconto / 100);
        return view('exer16',['ajust' => $ajust]);
    }
    public function abrirFormExer17(){
        return view('exer17');
    }
    public function respostaExer17(Request $request){
        $capital = $request -> valor1;
        $taxa = $request -> valor2;
        $periodo = $request -> valor3;
        $juros = $capital * ($taxa/100) * $periodo;
        return view('exer17',['juros' => $juros]);
    }
    public function abrirFormExer18(){
        return view('exer18');
    }
    public function respostaExer18(Request $request){
        $capital = $request -> valor1;
        $taxa = $request -> valor2;
        $periodo = $request -> valor3;
        $montante = $capital * ((1 + ($taxa/100)) ** $periodo);
        $juros = $montante - $capital;
        return view('exer18',['juros' => $juros]);
        }
    public function abrirFormExer19(){
        return view('exer19');
    }
    public function respostaExer19(Request $request){
        $dias = $request -> valor1;
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        return view('exer19',['horas' => $horas,'minutos' => $minutos,'segundos' => $segundos]);
    }
    public function abrirFormExer20(){
        return view('exer20');
    }
    public function respostaExer20(Request $request){
        $distancia = $request -> valor1;
        $tempo = $request -> valor2;
        $vm = $distancia / $tempo;
        return view('exer20',['vm' => $vm]);
    }
}
