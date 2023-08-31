<?php

namespace App\Http\Controllers;

use App\Models\Nome;
use DateTime;
use Illuminate\Http\Request;

class NomeController extends Controller
{
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
    public function show(Nome $nome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nome $nome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nome $nome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nome $nome)
    {
        //
    }

    /**
     * Executa a pesquisa opcional.
     */
    public function pesquisa(Request $request)
    {
       
        $nomes = Nome::where('nome', 'like', '%'.$request->name.'%')
        ->when($request->startDate, function($query)use($request){
            $startDate = new DateTime($request->startDate);
            $endDate = new DateTime($request->endDate);
            $query->whereDate('data','>=', $startDate->format('Y-m-d').' 00:00:00');
            $query->whereDate('data','<=', $endDate->format('Y-m-d').' 23:59:59');
        })
        ->get();
        \dd($nomes);
    }
}
