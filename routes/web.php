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
//!Product >>list + show
Route::get('/comics_list', function () {
    return view('comics_list',['comics'=>config('comics')]);
})->name('comics');


Route::get('/comic_show', function () {
    $comic=config('comics')[0];

    return view('pages.comic_show',compact('comic'));
})->name('comic_show');
