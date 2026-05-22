<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MessageContoller;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale() . '/myadmin',
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth'],
], function () {
    Route::resource('Products', ProductController::class);
    Route::get('/show-orders',     [ProductController::class, 'showOrders'])->name('show-orders');
    Route::get('/editOrder/{id}',  [ProductController::class, 'editOrder'])->name('editOrder');
    Route::post('/updateOrder',    [ProductController::class, 'updateOrder'])->name('updateOrder');
    Route::delete('/order/{id}',   [ProductController::class, 'deleteOrder'])->name('deleteOrder');
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth'],
], function () {
    Route::get('myadmin-home', fn () => view('admin.index'));

    Route::get('/myadmin-allmessages',           [MessageContoller::class, 'getAllMessages'])->name('myadmin-allmessages');
    Route::delete('/adminMessage/{id}',          [MessageContoller::class, 'deleteMessage'])->name('deleteMessage');
    Route::get('/deleteProductImage/{id}/{image}', [ProductController::class, 'deleteProductImage']);
    Route::post('/uploadProductImage',           [ProductController::class, 'uploadProductImage'])->name('Products.uploadProductImage');
    Route::post('/uploadProductVideo',           [ProductController::class, 'uploadProductVideo'])->name('Products.uploadProductVideo');
});
