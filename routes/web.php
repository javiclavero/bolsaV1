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
    return view('home');
})->name('home');

Route::get('/cotizaciones', function () {
    return view('cotizaciones');
})->name('cotizaciones');

Route::get('cotizaciones/import/{ticker}', 'App\Http\Controllers\GrabberController@grabDataYahoo')->name('importTicker');

Route::get('/bolsa', function () {
    return view('bolsa');
})->name('bolsa');

Route::get('/cuentas', function () {
    return view('cuentas');
})->name('cuentas');

Route::get('/inversiones', function () {
    return view('inversiones');
})->name('inversiones');

Route::post('bolsa/newOperation', 'App\Http\Controllers\OperationController@new')->name('newOperation-form-submit');
