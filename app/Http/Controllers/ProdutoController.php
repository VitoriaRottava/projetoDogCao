<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function listar()
    {
        $objProduto = Produto::all();

        return view('produto/produtos')->with('produtos', $objProduto);
    }

    public function cadastrar()
    {
        return view('produto/produtoCadastrar');
    }

    public function editar($id)
    {

        $produto  = Produto::find($id);

        return view('produto/produtoEditar')->with('produto', $produto);
    }

    public function deletar($id)
    {
        $produto  = Produto::find($id);

        if (empty($produto)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $produto->delete();

        return redirect()->action('App\Http\Controllers\ProdutoController@listar');
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('produto');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $produtos = $query->orderBy('nome')->paginate(20);

        return view('produto/produtos')->with('produtos', $produtos);
    }


    public function salvar(SalvarProduto $request, $id)
    {

        if ($id == 0) {
            $produto = new Produto();
            $produto->nome = $request->input('nome');
            $produto->marca = $request->input('marca');
            $produto->qtd_estoque = $request->input('qtd_estoque');
            $produto->custo = $request->input('custo');

            $produto->save();

            return redirect()->action('App\Http\Controllers\ProdutoController@listar');
        } else {
            $produto = Produto::find($id);
            $produto->nome = $request->input('nome');
            $produto->marca = $request->input('marca');
            $produto->qtd_estoque = $request->input('qtd_estoque');
            $produto->custo = $request->input('custo');

            $produto->save();

            return redirect()->action('App\Http\Controllers\ProdutoController@listar');
        }
    }
}
