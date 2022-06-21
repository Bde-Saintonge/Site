<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
})->name('home');

//Route::redirect('/', '/index.html')->name('home');

Route::get('/index.html', function () {
    return view('welcome');
})->name('welcome');

Route::get('/mentions-legales', function () {
    return view('regulation.mentions-legales');
});

Route::get('/rgpd', function () {
    return view('regulation.rgpd');
});

/*
 * Auth & Dashboard Route
 */

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'validator']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/reset_password_without_token', [
    ResetPasswordController::class,
    'reset_password_without_token',
])->name('reset_password_without_token');

/*
 * Posts Route
 */
//FIXME: slugpattern attention, il va être changé

$slugPattern = '[a-z0-9\-]+';

Route::get('/dashboard/{office_code_name}', [
    DashboardController::class,
    'index',
]);

Route::get('/user/{id}', [PostController::class, 'user'])->name('posts.user');

Route::get('/{office_code_name}', [PostController::class, 'office'])->name(
    'posts.office',
);

Route::get('/{office_code_name}/{post_slug}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where(['post_slug' => $slugPattern]);

//Route::get('/admin/create/post/{office_code_name}', [PostController::class, 'create_post'])
//    ->name('posts.create');

//Route::get('/admin/{id}/validate', [PostController::class, 'validate_post']);
//
//Route::get('/admin/{id}/edit', [PostController::class, 'edit']);
//
//Route::get('/admin/{id}/delete', [PostController::class, 'delete']);

Route::resource('posts', PostController::class)->only(['index', 'show']);

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('posts', PostController::class)->except([
            'index',
            'show',
        ]);

        //    Route::get('/post/{office:code_name}/create', [
        //        PostController::class,
        //        'create_post',
        //    ])->name('post.create');
        //
        //    Route::post('/post/{office:code_name}/create', [
        //        PostController::class,
        //        'register',
        //    ])->name('post.create');
        //
        //    Route::post('/{id}/update', [PostController::class, 'store']);
        //

        //        Route::controller(UserController::class)
        //            ->prefix('user')
        //            ->name('user.')
        //            ->group(function () {
        //                Route::get('/create', 'registerView')->name('create');
        //
        //                Route::post('/create', 'register')->name('create');
        //            });

        //TODO: Test routes livewire/fortify/sanctum bizarres
        Route::get('/clean-all-cache', function () {
            \Artisan::call('route:clear');
            \Artisan::call('cache:clear');
            \Artisan::call('view:clear');
            \Artisan::call('config:clear');
        })->name('clean-cache');
    });

