<?php

use App\Http\Controllers\CadController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Api\ManController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
       return view('welcome');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/cads', [CadController::class, 'index'])->name('cads.listall');
    Route::get('/cads/incluir', [CadController::class, 'create'])->name('cads.fsto');
    Route::get('/cads/editar/{cad}', [CadController::class, 'edit'])->name('cads.fupd');
    Route::get('/cads/{cad}', [CadController::class, 'show'])->name('cads.list');
    
    Route::post('/cads/salvar', [CadController::class, 'store'])->name('cads.sto');
    
    Route::put('/cads/update/{cad}', [CadController::class, 'update'])->name('cads.upd');
    
    Route::delete('/cads/delete/{cad}', [CadController::class, 'update'])->name('cads.delete');
        Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/monitor/{user}', [ManController::class, 'show'])->name('man.mon');
    Route::get('/monitor/{user}/search', [CadController::class, 'search'])->name('man.monsearch');
    Route::get('/monitor/admin/{cad}', [ManController::class, 'showdet'])->name('man.mondet');
});


