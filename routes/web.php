<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    NCMController,
    ProdutoController,
    TipoController
};
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
    return view('welcome');
});

//PRODUTO
Route::post('/produto/save', [ProdutoController::class,'save'])->name('produto.save');
Route::get('/produto/create', [ProdutoController::class,'create'])->name('produto.create');
Route::any('/produto/search', [ProdutoController::class,'search'])->name('produto.search');
Route::delete('/produto/{id}', [ProdutoController::class,'delete'])->name('produto.delete');
Route::get('/produto/edit/{id}', [ProdutoController::class,'edit'])->name('produto.edit');
Route::put('/produto/update/{id}', [ProdutoController::class,'update'])->name('produto.update');

Route::get('/produto', [ProdutoController::class,'index'])->name('produto.index');
//Route::get('/produto/{id}', [ProdutoController::class,'show'])->name('produto.show');

//NCM
Route::any('/ncm/search', [NCMController::class,'search'])->name('ncm.search');
Route::any('/ncm/getNCMs', [NCMController::class,'getNCMs'])->name('ncm.getNCMs');


//TIPO
Route::any('/tipo', [TipoController::class,'index'])->name('tipo.index');
Route::post('/tipo/save', [TipoController::class,'save'])->name('tipo.save');
Route::any('/tipo/{id}', [TipoController::class,'show'])->name('tipo.show');

//LOGIN - RECOVERY - SECURITY
Route::get('login', function () {
    return view('/login/login_cliente');
});

// Route::get('recovery', function () {
//     return view('/recovery/recovery_mail');
// });

// Route::post('recovery_confere', function () {
//     return view('/recovery/recovery');
// });

// Route::get('rastreio', function () {
//     return view('/rastreio/rastreio');
// });

// Route::get('rastreio_page', function () {
//     return view('/rastreio/rastreio_page');
// });



// Route::get('rastreio_page', function () {
//      return view('/rastreio/rastreio_page');
//  });

