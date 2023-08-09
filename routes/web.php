<?php

use App\Http\Controllers\PageController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('page.')->controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/success', 'success')->name('success');

    Route::post('/checkout', 'checkout')->name('checkout');

    Route::post('/pay', 'pay')->name('pay');
    Route::get('/callback', 'callback')->name('callback');
});
