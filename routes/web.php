<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class. 'index'])->name('index');

Route::get('/master', function(){
    return view('layouts.master');
});

Route::get('/accounts', function(){
    return view('accounts.create');
});

Route::get('/data/{id}/edit', 'DataController@edit');

Route::get('/transaction', function(){
    return view('transaction.create');
});

Route::resource('accounts', AccountController::class);

Route::resource('transaction', TransactionController::class);

Route::fallback(function (){
    return "Wah Kamu Nyasar, Turn Back!";
});
