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

Route::get('coba', function () {
    return "coba page dengan nilai string";
});

Route::get('blog',function(){
    return view('blog');
});

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/siswa', 'SiswaController@siswa');
Route::get('/siswa/kontak', 'SiswaController@kontak');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
