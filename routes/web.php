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
    return view('welcome');
});
Route::get('/', function ($id) {
    echo "Selamat Datang";
});
Route::get('/articeles/{id}', function ($id) {
    return "ini merupakan halaman artikel dengan $id";
});



