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

Route::get('/', function () {
    $comics = config('comics');
    $info = config('info');
    
    return view('comics', compact('comics', 'info'));
});


Route::get('characters', function () {

    return view('subpages.characters');
});


Route::get('movies', function () {

    return view('subpages.movies');
});
