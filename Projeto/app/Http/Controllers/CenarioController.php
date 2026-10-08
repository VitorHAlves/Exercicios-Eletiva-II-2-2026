<?php

namespace App\Http\Controllers;

use App\Models\Cenario;
use App\Models\EscolhaUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CenarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cenario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variacao = $request->input('variacao','A');
        //defino o id com base na variação
        $cenarioId = $request->input('cenario_id',($variacao === 'B' ? 2 : 1));
        //vejo se a ação veio do banner ou do formulário de preferências
        $acaoTomada = $request->input('escolha') ?? $request->input('acao_tomada') ?? 'configurou_preferencias';
        //salvo na session

        session(['cookie_variacao'=> $request->input('variacao')]);//salvo a variacao junto com a escolha
        session(['cookie_escolha'=> $acaoTomada]);
        session(['cookie_preferencias' => $request->all()]);
        
        //gravo no mysql com o id tb
        EscolhaUsuario::create([
            'user_id' => Auth::id(),
            'cenario_id' => $cenarioId,
            'acao_tomada' => $acaoTomada,
        ]);

        return redirect()->route('cenario.reflexao')->with('mensagem','Escolha registrada!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $variacao)
    {
        return view('cenario.show',compact('variacao'));
    }


    public function configuracoes(Request $request)
    {
        $variacao = $request->query('variacao','referencia');
        return view('cenario.configuracoes',compact('variacao'));
    }

    public function salvarConfiguracoes(Request $request)
    {
        session(['cookie_variacao' => $request->input('variacao')]);
        session(['cookie_escolha' => 'configurado']);
        session(['cookie_preferencias' => $request->all()]);

        EscolhaUsuario::create([
            'user_id' => Auth::id(),
            'cenario_id' => $request->input('cenario_id',1),//pega o id enviado ou diexa 1 como padrão
            'acao_tomada' => $request->input('variacao','configurou_preferencias'),
        ]);

        return redirect()->route('cenario.reflexao')->with('mensagem', 'Preferências salvas!');
    }


    public function reflexao()
    {
        return view('cenario.reflexao');
    }
    public function salvarReflexao(Request $request){
        session(['cookie_reflexao' => $request->input('percepcao')]);
        return redirect()->route('cenario.explicacao');
    }


    public function explicacao()
    {
        $variacao = session('cookie_variacao','referencia');//busco a informação da sessão
        return view('cenario.explicacao',compact('variacao'));
    }


    public function comparacao()
    {
        $variacao = session('cookie_variacao','referencia');
        return view('cenario.comparacao',compact('variacao'));
    }
}
