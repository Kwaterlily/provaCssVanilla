<?php

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


// Rotta per pagina welcome
Route::get('/', function () {
    return view('main');
})->name('main');

// Rotta per pagina prodotti
Route::get('products', function () {
    return view('products');
})->name('products');

// Rotta per pagina contatti
Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');


Route::get('app', function () {
    return view('layouts/app');
})->name('app');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
