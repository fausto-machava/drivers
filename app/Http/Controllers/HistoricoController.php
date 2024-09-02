<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Reclamacao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoController extends Controller
{

    private $objMultas;
    private $objReclamacoes;
    public function __construct()
    {

        $this->objMultas = new Multa();
        $this->objReclamacoes = new Reclamacao();
    }

    public function historico()
    {
        $reclamacoesAgente = DB::table('multas')
            ->join('reclamacaos', 'multas.id', '=', 'reclamacaos.multa')
            ->select('multas.*', 'reclamacaos.reclamacao')
            ->get();


        return view('historico', compact('reclamacoesAgente'));
    }
}
