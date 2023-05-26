<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ServicoController extends Controller
{
    //Validação dos dados recebidos no request
    function create(Request $request){
        $request->validate([
            'nome' => 'required',
            'telefone'=>'required',
            'origem' => 'required',
            'data_contato' => 'required',
            'observacao' => 'required'
        ]);
        $query = DB::table('servico')->insert([
            'nome'=>$request->input('nome'),
            'telefone'=>$request->input('telefone'),
            'origem'=>$request->input('origem'),
            'data_contato'=>$request->input('data_contato'),
            'observacao'=>$request->input('observacao')
        ]);
        return redirect()->to('/');
    }
    

    function listar(){
        $data = array(
            'listar' => DB::table('servico')->get()
        );
        return view('consultar', $data);
    }

    function editar($id){
        $row = DB::table('servico')
        ->where('id', $id)
        ->first();

        $data = [
            'info' => $row,
        ];
        return view('editar', $data);
    }

    function atualizar(Request $request){
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'origem' => 'required',
            'data_contato' => 'required',
            'observacao' => 'required',
        ]);
        $query = DB::table('servico')
        ->where('id', $request->input('cid'))
        ->update([
            'nome'=>$request->input('nome'),
            'telefone'=>$request->input('telefone'),
            'origem'=>$request->input('origem'),
            'data_contato'=>$request->input('data_contato'),
            'observacao'=>$request->input('observacao')
        ]);
        return redirect()->to('consultar');

        if($query){
            return back()->with('sucess', 'Dados atualizados com sucesso!');
        }
        else{
            return back()->with('fail', 'Algo deu errado!');
        }
    }
    function excluir($id){
        $query = DB::table('servico')
        ->where('id', $id)
        ->delete();

        if($query){
            return back()->with('sucess', 'Deletado com sucesso!');
        }
        else{
            return back()->with('fail', 'Algo deu errado!');
        }
    }
}    


