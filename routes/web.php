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

/**
 * Home routes
 */
Route::name('home.')->group(function () {
    Route::view('/', 'home.welcome')->name('home');
    Route::view('/index.html', 'home.welcome')->name('welcome');
});

/**
 * Legal routes
 */
Route::prefix('legal')
    ->name('legal.')
    ->group(function () {
        Route::view('/gdpr', 'legal.gdpr')->name('gdpr');
        Route::view('/mentions', 'legal.mentions')->name('mentions');
    });

/**
 * Authentication routes
 */
Route::controller(LoginController::class)
    ->prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/validate', 'validate')->name('validate');
            Route::get('/logout', 'logout')->name('logout');
        });

        Route::post('/reset', [ResetPasswordController::class, 'reset'])->name(
            'reset',
        );
    });

/**
 * Office posts routes
 */
Route::controller(PostController::class)
    ->name('office.')
    ->group(function () {
        Route::get('/{office:code_name}', 'index')->name('index');
        Route::get('/{office:code_name}/{post:slug}', 'show')->name('post');
    });

/**
 * Administration routes
 */
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard/{office?:code_name}', [
            DashboardController::class,
            'index',
        ])->name('dashboard');

        /**
         * Posts routes
         */
        Route::controller(PostController::class)
            ->prefix('posts')
            ->name('posts.')
            ->group(function () {
                Route::post('/{post}/validate', 'validate')->name('validate');
                Route::get('/{post:slug}/edit', 'edit')->name('edit');
            });

        Route::resource('posts', PostController::class)->except([
            'index',
            'show',
            'edit',
        ]);

        /**
         * Users routes
         */
        Route::controller(UserController::class)
            ->prefix('user')
            ->name('user.')
            ->group(function () {
                Route::get('/create', 'create')->name('create');

                Route::post('', 'store')->name('store');
            });

        /**
         * Clean all caches routes
         */
        //TODO: Test routes livewire/fortify/sanctum bizarres
        Route::get('/clear-cache', function () {
            \Artisan::call('route:clear');
            \Artisan::call('cache:clear');
            \Artisan::call('view:clear');
            \Artisan::call('config:clear');
        })->name('clear-cache');
    });
