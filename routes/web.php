<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TagsController;
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

// rotas dos produtos
Route::get('/', [ProductsController::class, 'index'])->name('products.index');
Route::get('/home', [ProductsController::class, 'index'])->name('products.index');
Route::get('/produtos', [ProductsController::class, 'index'])->name('products.index');
Route::get('/produtos/create', [ProductsController::class, 'getCreate'])->name('products.create');
Route::post('/produtos/create', [ProductsController::class, 'postCreate'])->name('products.create.post');
Route::get('/produto/{product}/editar', [ProductsController::class, 'getEdit'])->name('products.edit');
Route::post('/produto/{product}/editar', [ProductsController::class, 'postEdit'])->name('products.edit.post');
Route::get('/produto/{product}/ver', [ProductsController::class, 'show'])->name('products.show');
Route::get('/produto/{product}/excluir', [ProductsController::class, 'getDestroy'])->name('products.destroy');
Route::delete('/produto/{product}/excluir', [ProductsController::class, 'deleteDestroy'])->name('products.destroy.delete');

//rotas para as tags
Route::get('/tags', [TagsController::class, 'index'])->name('tags.index');
Route::get('/tags/relatorio', [TagsController::class, 'relatorio'])->name('tags.relatorio');
Route::get('/tags/create', [TagsController::class, 'getCreate'])->name('tags.create');
Route::post('/tags/create', [TagsController::class, 'postCreate'])->name('tags.create.post');
Route::get('/tag/{tag}/editar', [TagsController::class, 'getEdit'])->name('tags.edit');
Route::post('/tag/{tag}/editar', [TagsController::class, 'postEdit'])->name('tags.edit.post');
Route::get('/tag/{tag}/ver', [TagsController::class, 'show'])->name('tags.show');
Route::get('/tag/{tag}/excluir', [TagsController::class, 'getDestroy'])->name('tags.destroy');
Route::delete('/tag/{tag}/excluir', [TagsController::class, 'deleteDestroy'])->name('tags.destroy.delete');