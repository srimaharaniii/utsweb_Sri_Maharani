<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/formp', function () {
    return view('formp');
});

Route::get('/penyerahan', function () {
    return view('penyerahan');
});

Route::get('/formpenyerahan', function () {
    return view('formpenyerahan');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/struk', function () {
    return view('struk');
});

Route::get('/harga', function () {
    return view('harga');
});
