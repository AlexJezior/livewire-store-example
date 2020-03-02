<?php

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
    return view('login');
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/products', function() {
        return view('products');
    })->name('products-page');

    Route::get('/logout', function () {
        auth()->logout();
        return redirect(route('login'));
    })->name('logout');
});
