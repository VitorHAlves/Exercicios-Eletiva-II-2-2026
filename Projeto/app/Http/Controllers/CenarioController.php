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
        if(session(['cookie_escolha'=> $request->input('escolha')]))
            return redirect()->route('cenario.reflexao')->with('mensagem','Escolha registrada!');
        else
            return redirect()->route('cenario.index')->with('mensagem','Erro ao registrar a escolha!');
        
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
}
