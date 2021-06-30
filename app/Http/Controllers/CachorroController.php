<?php

namespace App\Http\Controllers;

use App\Models\Cachorro;
use App\Models\Dono;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CachorroController extends Controller
{
    public function listar()
    {
        $objCachorro = Cachorro::all();

        return view('cachorros')->with('cachorros', $objCachorro);
    }

    public function cadastrar()
        {
            $donos = Dono::all();
            $produtos = Produto::all();

            return view('cachorroCadastrar', compact('donos','produtos'));
        }

    public function editar($id)
    {

        $cachorro  = Cachorro::find($id);
        $donos = Dono::all();
        $produtos = Produto::all();

        return view('cachorroEditar', compact('donos', 'cachorro', 'produtos'));
    }

    public function deletar($id)
    {
        //select * from cliente where id = $id
        $cachorro  = Cachorro::find($id);

        if (empty($cachorro)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        //delete from cliente where id = $id
        $cachorro->delete();

        return redirect()->action('App\Http\Controllers\CachorroController@listar');
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('cachorro');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $cachorros = $query->orderBy('nome')->paginate(20);

        return view('cachorros')->with('cachorros', $cachorros);
    }


    public function salvar(Request $request, $id)
    {

        if ($id == 0) {
            $cachorro = new Cachorro();
            $cachorro->nome = $request->input('nome');
            $cachorro->porte = $request->input('porte');
            $cachorro->pelagem = $request->input('pelagem');
            $cachorro->sexo = $request->input('sexo');
            $cachorro->idade = $request->input('idade');
            $cachorro->cor = $request->input('cor');
            $cachorro->id_produto = $request->input('id_produto');
            $cachorro->id_dono = $request->input('id_dono');

           //  dd($cachorro);
            $cachorro->save();

            return redirect()->action('App\Http\Controllers\CachorroController@listar');
        } else {
            //select * from cliente where id = $id
            $cachorro = Cachorro::find($id);
            $cachorro->nome = $request->input('nome');
            $cachorro->porte = $request->input('porte');
            $cachorro->pelagem = $request->input('pelagem');
            $cachorro->sexo = $request->input('sexo');
            $cachorro->idade = $request->input('idade');
            $cachorro->cor = $request->input('cor');
            $cachorro->id_produto = $request->input('id_produto');
            $cachorro->id_dono = $request->input('id_dono');

            $cachorro->save();

            return redirect()->action('App\Http\Controllers\CachorroController@listar');
        }
    }
}
