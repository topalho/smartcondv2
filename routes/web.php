<?php

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
    return view('login');
})->name('portal.home');

Route:: get('usuarios','Form\\TesteController@listllUsers')->name('users.listAll');

Route::get('/administradoras', function () {
    return view('portal.administradoras.index');
})->name('portal.administradoras');


Route::get('/condominios', function () {
    return view('portal.condominios.index');
})->name('portal.condominios');


Route::get('/unidades', function () {
    return view('portal.unidades.index');
})->name('portal.unidades');

Route::get('/boletos', function () {
    return view('portal.boletos.index');
})->name('portal.boletos');

Route::get('/dashboard', function () {
    return view('portal.dashboard.index');
})->name('portal.dashboard');

Route::get('usuarios','UserController@listUser');





// Route::get('/', function () {
//     return view('portal.cobranca');
// })->name('portal.cobranca');
