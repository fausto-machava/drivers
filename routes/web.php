<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CondutorController;
use App\Http\Controllers\infraccaoController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\ReciboController;
use App\Http\Controllers\ReclamacaoController;
use App\Http\Controllers\UtilizadorController;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::get('/', [ReciboController::class, 'index' ]);


//Route::get('/', [UtilizadorController::class, 'admin']);
Route::get('addAgente', [UtilizadorController::class, 'storeAgente']);
Route::get('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('infraccao', [InfraccaoController::class, 'storeInfraccao']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::post('/storeCondutor', [UtilizadorController::class, 'storeCondutor'])->name('addCondutor');
Route::get('/condutor', [CondutorController::class, 'index'])->name('condutor');
Route::get('/ListaCondutores', [CondutorController::class, 'listaCondutores'])->name('listaCondutores');
Route::post('/storeMulta', [MultaController::class, 'storeMulta'])->name('addMulta');
Route::post('/addReclamacao', [ReclamacaoController::class, 'storeReclamacao'])->name('addReclamacao');

Route::get('/multa', [MultaController::class, 'index'])->name('multa');
Route::get('/ListaMultas', [MultaController::class, 'listaMultas'])->name('listaMultas');

Route::get('/reclamacao', [ReclamacaoController::class, 'index'])->name('reclamacao');
