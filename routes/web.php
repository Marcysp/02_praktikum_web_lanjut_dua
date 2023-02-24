<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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

// akan memanggil
// 127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

// // 127.0.0.1:8000/hello ==> view Hello world
Route::get('/hello', function () {
    return 'Hello world';
});

// // 127.0.0.1:8000/hello/id ==> view Hello (id) wlcome to this web
Route::get('/hello/{id}', function ($id) {
    return "<h3> HELLO $id WELCOME TO THIS WEB";
});

// Route::get('mahasiswa', function ($id) {
// });

// Route::post('mahasiswa', function ($id) {
// });

// Route::put('mahasiswa', function ($id) {
// });

// Route::delete('mahasiswa', function ($id) {
// });

// Route::get('mahasiswa/{id}', function ($id) {
// });

// Route::post('mahasiswa/{id}', function ($id) {
// });

// Route::put('mahasiswa/{id}', function ($id) {
// });

// Route::delete('mahasiswa/{id}', function ($id) {
// });

// Route::match(['get', 'post'], '/specialUrl', function () {
// });

// Route::any('/specialMahasiswa', function ($id) {
// });

Route::get('siswa', [WelcomeController::class, 'hello']);
