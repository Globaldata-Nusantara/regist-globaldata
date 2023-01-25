<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mikrotikapi;
// use App\Http\Controllers\putcertificate;

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
});

Route::get('/regl2tp', function () {
    return view('regl2tp');
});


// Route::get('/', [mikrotikapi::class, 'index']);
Route::post('/regl2tp', [mikrotikapi::class, 'regl2tp'])->name('regl2tp');

