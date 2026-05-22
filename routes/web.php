<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::redirect('/', '/en');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/product-view/{id}', [HomeController::class, 'details']);
    Route::get('/AllProducts',       [HomeController::class, 'getAllProducts']);
    Route::get('/QrProducts',        [HomeController::class, 'getQrProducts'])->name('QrProducts');
    Route::get('/single-Product',    [HomeController::class, 'singleQr'])->name('single-Product');
    Route::get('/about',             [HomeController::class, 'about']);
    Route::get('/contact',           [HomeController::class, 'contact']);
    Route::get('/success',           [HomeController::class, 'success']);
    Route::get('/',                  [HomeController::class, 'index']);
});

Route::post('/contactSave', [HomeController::class, 'contactSave']);
Route::post('/orderSave',   [HomeController::class, 'orderSave']);

Route::get('/test-me', fn () => 'Working!');

Route::get('/welcome', fn () => view('welcome'));

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cache is cleared!';
});
