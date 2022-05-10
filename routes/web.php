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

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@validator');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::post('/reset_password_without_token', 'App\Http\Controllers\Auth\ResetPasswordController@reset_password_without_token')->name('reset_password_without_token');

/*
 * Posts Route
 */
$officePattern = '[a-z-]{3,8}';
$slugPattern = '[a-z0-9\-]+';

Route::get('/dashboard/{office_name}', 'App\Http\Controllers\Auth\DashboardController@index')->name('dashboard')->where('office_name', $officePattern);;

Route::get('/user/{id}', 'App\Http\Controllers\PostController@user')->name('posts.user')->where('id', '[0-9]+');
Route::get('/{office_slug}', 'App\Http\Controllers\PostController@office')->name('posts.office')->where('office_slug', $slugPattern);
Route::get('/{office_slug}/{post_slug}', 'App\Http\Controllers\PostController@show')->name('posts.show')->where(['office_slug' => $slugPattern, 'post_slug' => $slugPattern]);

/*
 * Admin Route CRUD
 */
Route::get('/admin/create/post', 'App\Http\Controllers\PostController@create_post');
Route::post('/admin/create/post', 'App\Http\Controllers\PostController@create_BDD');

Route::get('/admin/{id}/validate', 'App\Http\Controllers\PostController@validate_post')->where('id', '[0-9]+');
Route::get('/admin/{id}/edit', 'App\Http\Controllers\PostController@edit')->where('id', '[0-9]+');
Route::post('/admin/{id}/edit', 'App\Http\Controllers\PostController@modify')->where('id', '[0-9]+');

Route::get('/admin/{id}/delete', 'App\Http\Controllers\PostController@delete')->where('id', '[0-9]+');

/*
 * Clear Cache Route
 */
Route::get('/clean-all-cache', function () {
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});

/*

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
