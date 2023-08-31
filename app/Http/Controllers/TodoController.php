<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class TodoController extends Controller
{

    public function dados(Request $request)
    {
        //$dados = DB::table('todos')->get();
        //$dados = Todo::all();
        //$dados = Todo::where('votos', '>=', 5)
        $dados = Todo::select('nome', 'votos')
        ->orderBy('nome', 'desc')
        ->get();

        \dd($dados);
        $users = '';
        foreach ($dados as $dado) {
            $users .= "{$dado->nome} <br>";
        }
        return "Os usuarios cadastrados são: <br> {$users}";
    }
 
    /**
     * pegarRelacionamento
     *
     * @return void
     */
    public function pegarRelacionamento(Request $request)
    {
        $query = Todo::select('todos.*','users.*')
        ->join('users', 'todos.user_id', '=', 'users.id')
        ->get();
        \dd($query);
    }

    /**
     * inserir dados no banco
     */
    public function inserir(Request $request)
    {
        Todo::create([
            'nome'=>'marcos',
            'votos'=>'7'
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Atualizar os dados no banco de dados.
     */
    public function update(Request $request, Todo $todo)
    {
       
            $update = Todo::where('id', '=', 500)
            ->update([
            'nome' => 'mille'
            ]);
            if ($update) {
                echo 'Dados atualizado com sucesso!';
            }else {
                echo 'Houve uma falha!';
            }

       

        // $update = Todo::where('nome', '=', thiago)
        // ->where('votos', '=', 5)
        // ->update([
        //     'nome' => 'Melque',
        //        'votos'=> '13'
        // ]);
    }

    /**
     * Deleta um dado no banco.
     */
    public function delete(Request $request)
    {
        Todo::where('id', '=', $request->id)->delete();
    }
}
