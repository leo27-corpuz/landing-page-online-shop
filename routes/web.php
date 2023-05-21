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
})->name('welcome');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('shop')->group(function () {
    Route::get('/', function () {
        return view('shop.index');
    })->name('shop');
    Route::get('/view/{id}', function () {
        return view('shop.show');
    })->name('show');
});
Route::prefix('contact')->group(function () {
    Route::get('/', function () {
        return view('contact.index');
    })->name('contact');
});
