<?php

use App\Http\Controllers\ProdutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function() {
//     return view('site/empresa');
// });

// Route::any('/any', function() {
//     return 'Permite todos os verbos http';
// });

// Route::match(['get','post'], '/match', function() {
//     return 'Permite somente os verbos definidos no array';
// });

// Route::get('produto/{id}/{categoria}', function($id, $categoria) {
//    return 'O valor do parametro id é: ' . $id . '<br>' . 'Categoria: ' . $categoria; 
// });

// Route::get('/sobre', function() {
//     return redirect('/empresa');
// });

// Route::redirect('/sobre', '/empresa');
// Route::view('/empresa', '/site/empresa');

// Route::get('/news', function() {
//     return view('site/news');
// })->name('noticias');

// Route::get('/novidades', function() {
//     return redirect()->route('noticias');
// });

// Route::prefix('admin')->group(function() {
//     Route::get('dashboard', function() {
//         return 'Dashboard';
//     })->name('admin.dashboard');

//     Route::get('users', function() {
//         return 'Usuários';
//     })->name('admin.users');

//     Route::get('clientes', function() {
//         return 'Clientes';
//     })->name('admin.clientes');
// });

// Route::name('admin.')->group(function() {
//     Route::get('admin/dashboard', function() {
//         return 'Dashboard';
//     })->name('dashboard');

//     Route::get('admin/users', function() {
//         return 'Usuários';
//     })->name('users');

//     Route::get('admin/clientes', function() {
//         return 'Clientes';
//     })->name('clientes');
// });

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
//     ] , function() {
//     Route::get('admin/dashboard', function() {
//         return 'Dashboard';
//     })->name('dashboard');

//     Route::get('admin/users', function() {
//         return 'Usuários';
//     })->name('users');

//     Route::get('admin/clientes', function() {
//         return 'Clientes';
//     })->name('clientes');
// });

Route::get('/', [ProdutoController::class,'index'])->name('produto.index');

Route::get('/produto/{id?}', [ProdutoController::class,'show'])->name('produto.show');

Route::resource('produtos', ProdutoController::class);