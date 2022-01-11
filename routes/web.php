<?php

use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\TestResult;

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



Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');


Route::get('/login', function () {return 'Login';});

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () {return 'clientes';});
    Route::get('/fornecedores',  [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'produtos';});
    
});

Route::get('/teste/{p1}/{p2}',  [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function () {
    echo '<h1>A Rota requisitada não existe. <a href="'.route('site.index') . '">Clique Aqui</h1></a>';
});
