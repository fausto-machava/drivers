<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\User;
use Illuminate\Http\Request;

class MultaController extends Controller
{
    private $objCondutor;
    private $objMultas;
    public function __construct()
    {
        $this->objCondutor = new User();
        $this->objMultas = new Multa();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Condutores = $this->objCondutor->all()->where('nivelAcesso', '=', 'condutor');
        return view('multa',compact('Condutores'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaMultas()
    {
        $Multas = $this->objMultas->all();;
        return view('Multas', compact('Multas'));

    }

    public function listaCondutores()
    {


        //return view('Condutores');
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
    public function storeMulta(Request $request)
    {
        $utilizador = new Multa();
        $utilizador->condutor = $request->input('condutor');
        $utilizador->matricula = $request->input('matricula');
        $utilizador->data = $request->input('data');
        $utilizador->marca = $request->input('marca');
        $utilizador->hora = $request->input('hora');
        $utilizador->estado = $request->input('estado');
        $utilizador->local = $request->input('local');
        $utilizador->artigo = $request->input('artigo');
        $utilizador->agente = $request->input('agente');
        $utilizador->valor = $request->input('valor');
        $utilizador->detalhes = $request->input('detalhes');
        $utilizador->save();
        return redirect()->route('home')->with('mensagem', 'Condutor adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function show(Multa $multa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function edit(Multa $multa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multa $multa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multa  $multa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multa $multa)
    {
        //
    }
}
