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
        $respondidos = EscolhaUsuario::where('user_id', Auth::id())
            ->pluck('cenario_id');//pluck pega os valores de uma coluna
            //pega o id dos cenários que o usuário respondeu

            //dps busca esses cenáros e pega o valor da coluna variacao
        $variacoesRespondidas = Cenario::whereIn('id', $respondidos)
            ->pluck('variacao')
            ->all();
            //ai da pra saber qual o usuário ja respondeu,para mudar o botão de alterar
        return view('cenario.index', compact('variacoesRespondidas'));
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
        //recebo a variação e a esoclha pelo formulario
        $variacao = $request->input('variacao', 'referencia');
        $acaoTomada = $request->input('escolha', 'configuracao_preferencias');

        //busco o cenario pela variação
        $cenario = Cenario::where('variacao', $variacao)->firstOrFail();

        //procura uma resposta desse usuário para esse cenario
        //se encontrar atualiza se nao cria um registro
        $registro = EscolhaUsuario::updateOrCreate(
            //primeiro array identifica o registro, o segundo é os dados que vao ser salvos
            [
                'user_id' => Auth::id(),
                'cenario_id' => $cenario->id,
            ],
            [
                //salva a nova escolha e limpa a reflexao anterior
                'acao_tomada' => $acaoTomada,
                'reflexao' => null,
            ]
        );
        //remove informações da tentativa anterior guardadas na sessão
        session()->forget([
            'cookie_reflexao',
            'cookie_preferencias',
        ]);
        //guarda os dados da tentativa atual
        session([
            'cookie_variacao' => $variacao,
            'cookie_escolha' => $acaoTomada,
            'escolha_id' => $registro->id,
        ]);

        return redirect()
            ->route('cenario.reflexao')
            ->with('mensagem', 'Escolha registrada!');
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

        EscolhaUsuario::where('id', session('escolha_id'))
            ->where('user_id', Auth::id())
            ->update(['reflexao' => $request->input('percepcao')]);
    
        return redirect()->route('cenario.explicacao');
    }


    public function explicacao()
    {    
        $variacao = session('cookie_variacao', 'referencia');    
        $cenario = Cenario::with('mecanismos') ->where('variacao', $variacao)->firstOrFail();
        
        return view('cenario.explicacao', compact('variacao', 'cenario'));
        
    }


    public function comparacao()
    {
        $variacao = session('cookie_variacao','referencia');
        return view('cenario.comparacao',compact('variacao'));
    }
}
