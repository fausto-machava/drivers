<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Reclamacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReclamacaoController extends Controller
{

    private $objMultas;
    private $objReclamacoes;
    public function __construct()
    {

        $this->objMultas = new Multa();
        $this->objReclamacoes = new Reclamacao();
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

    public function indexReclamacoes()
    {
        $reclamacoes = DB::table('reclamacaos')
            ->join('multas', 'reclamacaos.multa', '=', 'multas.id')
            ->select('multas.*', 'reclamacaos.reclamacao')
            ->get();

        return view('reclamacoes', compact('reclamacoes'));
    }

    public function historico()
    {
        $reclamacoesAgente = DB::table('multas')
            ->join('reclamacaos', 'multas.id', '=', 'reclamacaos.multa')
            ->select('multas.*', 'reclamacaos.reclamacao')
            ->get();


        return view('historico', compact('reclamacoesAgente'));
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
        $reclamacao = new Reclamacao();
        $reclamacao->multa = $request->input('multa');
        $reclamacao->reclamacao = $request->input('reclamacao');
        $reclamacao->save();
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
