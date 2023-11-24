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

Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        "title" => "Registrasi"
    ]);
});
Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Pusat Bantuan"
    ]);
});