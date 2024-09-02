<?php

namespace App\Http\Controllers;

use App\Models\Condutor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class UtilizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function storeAgente(Request $request)
    {

            $utilizador = new User();
            $utilizador->nome = $request->input('nome');
            $utilizador->email = $request->input('email');
            $utilizador->nivelAcesso = 'Agente';
            $utilizador->password = Hash::make($request->input('password'));
            $utilizador->save();
            return redirect()->route('utilizador')->with('mensagem', 'Agente adicionado com sucesso!');

    }
    public function storeCondutor(Request $request)
    {

            $utilizador = new User();
            $utilizador->name = $request->input('nome');
            $utilizador->dataNasc = $request->input('dataNasc');
            $utilizador->nrCarta = $request->input('nrCarta');
            $utilizador->profissao = $request->input('profissao');
            $utilizador->local = $request->input('local');
            $utilizador->nomePai = $request->input('nomePai');
            $utilizador->nomeMae = $request->input('nomeMae');
            $utilizador->morada = $request->input('morada');
            $utilizador->email = $request->input('nrCarta').'@simulco.com';
            $utilizador->password = Hash::make($request->input('nome').''.$request->input('nrCarta'));
            $utilizador->nivelAcesso = 'condutor';
            $utilizador->save();
            $utilizador->password = $request->input('nome').''.$request->input('nrCarta');
            $pdf = pdf::loadView('userData',compact('utilizador'));
            return $pdf->download('utilizador.pdf');
            return redirect()->route('home')->with('mensagem', 'Condutor adicionado com sucesso!');

    }



    public function admin(){
        $utilizador = new User();
        $utilizador->name = 'administrador';
        $utilizador->email = 'admin@gmail.com';
        $utilizador->nivelAcesso = 'admin';
        $utilizador->password = Hash::make('1234');
        $utilizador->save();
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
