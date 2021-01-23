<?php

use App\Http\Controllers\Controller;
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

Route::get('/index.html', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@validator');

Route::get('/register-insert-data', 'App\Http\Controllers\Auth\RegisterController@insert_SQL_User')->name('register-insert-data');

Route::get('/clean-all-cache', function (){
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
