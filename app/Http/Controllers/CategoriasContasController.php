<?php

namespace App\Http\Controllers;

use App\Models\CategoriaConta;
use Illuminate\Http\Request;

class CategoriasContasController extends Controller
{
    public function index()
    {
        $categorias = CategoriaConta::all();

        return view('categorias.index', compact('categorias'));
    }

    public function form(CategoriaConta $categoria = null)
    {
        if ($categoria) {
            $categoria = CategoriaConta::find($categoria->getKey());
        }

        return view('categorias.formulario', compact('categoria'));
    }

    public function store(Request $request){
        CategoriaConta::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function update(Request $request, CategoriaConta $categoria)
    {
        $dados = $request->all();
        $categoria->update($dados);

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Request $request, CategoriaConta $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias-conta.index')->with('success', 'Categoria deletada com sucesso!');
    }
}
