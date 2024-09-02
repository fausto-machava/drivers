<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        return view('multa', compact('Condutores'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPay()
    {

        $multas = $this->objMultas->all()->where('condutor', '=', Auth::user()->name)->where('pagamento', '=', 0);
        return view('pagar', compact('multas'));
    }

    public function indexPagamento(Request $request)
    {
        $codigo = $request->input('multa');
        $multa = Multa::firstwhere('id', $codigo);
        return view('pagamento', compact('multa'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaMultas()
    {
        if (Gate::allows('condutor')) {
            $Multas = Multa::paginate(10)->where('condutor', '=', Auth::user()->name);
        } else {
            $Multas = Multa::paginate(10);
        }

        // return dump($Multas);
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
        $utilizador->agente = Auth::user()->name;
        $utilizador->valor = $request->input('valor');
        $utilizador->detalhes = $request->input('detalhes');
        $utilizador->pagamento = 0;
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

    public function gerarQRCode($valor, $codigoMulta)
    {
        $conteudoQRCode = "Valor: R$ " . $valor . "\nCódigo da Multa: " . $codigoMulta;

        return response(QrCode::format('png')->size(200)->generate($conteudoQRCode))
            ->header('Content-Type', 'image/png');
    }
}
