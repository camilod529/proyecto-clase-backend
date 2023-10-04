<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});
Route::get('product', [ProductController::class, 'listProducts']);

Route::get('detail', [ProductController::class, 'detailProduct']);

// Route::get('product/create', function () {
//     return "Formulario de la creacion de archivos";
// });

// Route::get('product/{id}', function ($id) {
//     return "Estoy en la pagina del producto $id";
// });
// Route::get('product/{id}/{category}', function ($id, $category) {
//     return "Estoy en la pagina del producto $id en la categoria $category";
// });