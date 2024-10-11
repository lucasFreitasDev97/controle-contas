<?php

namespace App\Http\Controllers;

use App\Models\CategoriaConta;
use Illuminate\Http\Request;

class CategoriasContasController extends Controller
{
    public function index()
    {
        $categoriasConta = CategoriaConta::all();

        return view('categorias-conta.index', compact('categoriasConta'));
    }

    public function form(CategoriaConta $categoriaConta = null)
    {
        if ($categoriaConta) {
            $categoriaConta = CategoriaConta::find($categoriaConta->getKey());
        }

        return view('categorias-conta.formulario', compact('categoriaConta'));
    }

    public function store(Request $request){
        CategoriaConta::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function update(Request $request, CategoriaConta $categoriaConta)
    {
        $dados = $request->all();
        $categoriaConta->update($dados);

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Request $request, CategoriaConta $categoriaConta)
    {
        $categoriaConta->delete();

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria deletada com sucesso!');
    }
}
