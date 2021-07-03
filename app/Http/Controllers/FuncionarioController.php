<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarFuncionario;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    public function listar()
    {
        $objFuncionario = Funcionario::all();

        return view('funcionario/funcionarios')->with('funcionarios', $objFuncionario);
    }

    public function cadastrar()
    {
        return view('funcionario/funcionarioCadastrar');
    }

    public function editar($id)
    {

        $funcionario  = Funcionario::find($id);

        return view('funcionario/funcionarioEditar')->with('funcionario', $funcionario);
    }

    public function deletar($id)
    {
        $funcionario  = Funcionario::find($id);

        if (empty($funcionario)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $funcionario->delete();

        return redirect()->action('App\Http\Controllers\FuncionarioController@listar');
    }

    public function pesquisar(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('funcionario');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $funcionarios = $query->orderBy('nome')->paginate(20);

        return view('funcionario/funcionarios')->with('funcionarios', $funcionarios);
    }


    public function salvar(SalvarFuncionario $request, $id)
    {

        if ($id == 0) {
            $funcionario = new Funcionario();
            $funcionario->nome = $request->input('nome');
            $funcionario->cpf = $request->input('cpf');
            $funcionario->salario = $request->input('salario');
            $funcionario->telefone = $request->input('telefone');
            $funcionario->email = $request->input('email');

            $funcionario->save();

            return redirect()->action('App\Http\Controllers\FuncionarioController@listar');
        } else {
            $funcionario = Funcionario::find($id);
            $funcionario->nome = $request->input('nome');
            $funcionario->cpf = $request->input('cpf');
            $funcionario->salario = $request->input('salario');
            $funcionario->telefone = $request->input('telefone');
            $funcionario->email = $request->input('email');

            $funcionario->save();

            return redirect()->action('App\Http\Controllers\FuncionarioController@listar');
        }
    }
}
