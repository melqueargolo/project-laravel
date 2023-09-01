<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('filmes');
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
        $categorias = $request->categoria;
        $filmes = Filme::whereIn('categoria', $categorias)->get();
        $html = 'Os filmes que você selecionou são: ';
        foreach ($filmes as $filme){
        $html .= $filme->nome.'';
        }
    echo $html;
    }

    /**
     * Display the specified resource.
     */
    public function show(Filme $filme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filme $filme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filme $filme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filme $filme)
    {
        //
    }
}
