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

session_start();

/*
 * Welcome Route
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index.html', function () {
    return view('welcome');
});

Route::get('/mentions-legales', function () {
    return view('regulation.mentions-legales');
});

Route::get('/rgpd', function () {
    return view('regulation.rgpd');
});

/*
 * Auth & Dashboard Route
 */

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@validator');
Route::get('/register-insert-data', 'App\Http\Controllers\Auth\RegisterController@insert_SQL_User')->name('register-insert-data');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@validator');

Route::get('/dashboard', 'App\Http\Controllers\Auth\DashboardController@index')->name('dashboard');

/*
 * Posts Route
 */
$slugPattern = '[a-z0-9\-]+';

Route::get('/user/{id}', 'App\Http\Controllers\PostController@user')->name('posts.user')->where('id', '[0-9]+');
Route::get('/{office_slug}', 'App\Http\Controllers\PostController@office')->name('posts.office')->where('office_slug', $slugPattern);
Route::get('/{office_slug}/{post_slug}', 'App\Http\Controllers\PostController@show')->name('posts.show')->where(['office_slug' => $slugPattern, 'post_slug' => $slugPattern]);


/*
 * Clear Cache Route
 */

Route::get('/clean-all-cache', function (){
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});

/*

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
