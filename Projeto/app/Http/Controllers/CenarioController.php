<?php

namespace App\Http\Controllers;

use App\Models\Cenario;
use Illuminate\Http\Request;

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
        session(['cookie_escolha'=> $request->input('escolha')]);
        session(['cookie_variacao'=> $request->input('variacao')]);//salvo a variacao junto com a escolha
        return redirect()->route('cenario.reflexao')->with('mensagem','Escolha registrada!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $variacao)
    {
        return view('cenario.show',compact('variacao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cenario $cenario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cenario $cenario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cenario $cenario)
    {
        //
    }
        /**
     * Show the "Configurar preferências" screen.
     */
    public function configuracoes(Request $request)
    {
        $variacao = $request->query('variacao','referencia');
        return view('cenario.configuracoes',compact('variacao'));
    }

    /**
     * Store the detailed preferences chosen inside configurações.
     */
    public function salvarConfiguracoes(Request $request)
    {
        session(['cookie_variacao' => $request->input('variacao')]);
        session(['cookie_escolha' => 'configurado']);
        session(['cookie_preferencias' => $request->all()]);

        return redirect()->route('cenario.reflexao')->with('mensagem', 'Preferências salvas!');
    }

    /**
     * Display the reflection screen (question after the choice).
     */
    public function reflexao()
    {
        return view('cenario.reflexao');
    }
    public function salvarReflexao(Request $request){
        session(['cookie_reflexao' => $request->input('percepcao')]);
        return redirect()->route('cenario.explicacao');
    }

    /**
     * Display the explanatory screen.
     */
    public function explicacao()
    {
        $variacao = session('cookie_variacao','referencia');//busco a informação da sessão
        return view('cenario.explicacao',compact('variacao'));
    }

    /**
     * Display the final comparison between interfaces.
     */
    public function comparacao()
    {
        return view('cenario.comparacao');
    }
}
