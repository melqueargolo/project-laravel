<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
