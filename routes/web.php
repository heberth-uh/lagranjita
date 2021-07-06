<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;

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
    return view('/auth/login');
});

// Rutas para Productos
/*Route::get('/productos', function () {
    return view('producto.index');
}); */

//Route::get('/productos/create', [ProductoController::class, 'create']);

Route::resource('producto', ProductoController::class)->middleware(['auth']);

Auth::routes();

Route::get('/home', [ProductoController::class, 'index'])->name('home');
//Ruta de empleados
Route::resource('empleado', EmpleadoController::class)->middleware(['auth']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [ProductoController::class, 'index'])->name('home')->middleware(['auth']);
});