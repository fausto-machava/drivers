<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Reclamacao;
use Illuminate\Http\Request;

class ReclamacaoController extends Controller
{

    private $objMultas;
    public function __construct()
    {

        $this->objMultas = new Multa();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Multas = $this->objMultas->all();
        return view('reclamacao', compact('Multas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReclamacao(Request $request)
    {
        $utilizador = new Reclamacao();
        $utilizador->reclamacao = $request->input('reclamacao');
        $utilizador->save();
        return redirect()->route('home')->with('mensagem', 'Reclamacao adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamacao $reclamacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamacao $reclamacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamacao $reclamacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamacao  $reclamacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamacao $reclamacao)
    {
        //
    }
}
