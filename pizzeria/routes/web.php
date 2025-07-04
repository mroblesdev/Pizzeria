<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoUsuarioController;

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
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    /* Route::resource('menusuperior', 'MenuSuperiorController')->names('menusuperior');*/

     Route::resource('tipousuario', 'TipoUsuarioController')->names('tipousuario');
     Route::resource('cliente', 'ClienteController')->names('cliente');

});