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

Route::get('/home', function () {
    $comics = config('comics');
    return view('guest.home', ["comics" => $comics]);
})->name('home-page');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (is_numeric($id) && $id>=0 && $id < count($comics)){
        return view('guest.comic', ["comic" => $comics[$id]]);
    } else {
        abort(404);
    }
})->name('guest-comic');