<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarDono;
use App\Models\Dono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonoController extends Controller
{
    public function listar()
    {
        $objDono = Dono::all();

        return view('dono/donos')->with('donos', $objDono);
    }

    public function cadastrar()
    {
        return view('dono/donoCadastrar');
    }

    public function editar($id)
    {
        $dono  = Dono::find($id);

        return view('dono/donoEditar')->with('dono', $dono);
    }

    public function deletar($id)
    {
        $dono  = Dono::find($id);

        if (empty($dono)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $dono->delete();

        return redirect()->action('App\Http\Controllers\DonoController@listar');
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('dono');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $donos = $query->orderBy('nome')->paginate(20);

        return view('dono/donos')->with('donos', $donos);
    }


    public function salvar(SalvarDono $request, $id)
    {

        if ($id == 0) {
            $dono = new Dono();
            $dono->nome = $request->input('nome');
            $dono->cpf = $request->input('cpf');
            $dono->telefone = $request->input('telefone');
            $dono->email = $request->input('email');
            $dono->endereco = $request->input('endereco');

            $dono->save();

            return redirect()->action('App\Http\Controllers\DonoController@listar');
        } else {

            $dono = Dono::find($id);
            $dono->nome = $request->input('nome');
            $dono->cpf = $request->input('cpf');
            $dono->telefone = $request->input('telefone');
            $dono->email = $request->input('email');
            $dono->endereco = $request->input('endereco');

            $dono->save();

            return redirect()->action('App\Http\Controllers\DonoController@listar');
        }
    }
}
