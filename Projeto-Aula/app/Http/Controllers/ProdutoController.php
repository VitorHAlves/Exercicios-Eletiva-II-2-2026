<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('produto.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       if(Produto::create($request->all()))
            return redirect()->route('produto.index')->with('mensagem','Produto inserido com sucesso!');
        else
            return redirect()->route('produto.index')->with('mensagem','Erro ao inserir!');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view('produto.edit',compact('produto','categorias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        if($produto->update($request->all()))
            return redirect()->route('produto.index')->with('mensagem','Produto alterado com sucesso!');
        else
            return redirect()->route('produto.index')->with('mensagem','Erro ao alterar o produto!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $produto = Produto::findOrFail($id);
        if($produto->delete())
            return redirect()->route('produto.index')->with('mensagem','Produto excluído!');
        else
            return redirect()->route('produto.index')->with('mensagem','Erro ao excluir o produto!');
        
    }
}
