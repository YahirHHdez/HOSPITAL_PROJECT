<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;



Route::get('/index', function () {
    return view('welcome');
});


Route::get('/', [Home::class, 'index'])->name('index');
Route::get('/about', [Home::class, 'about'])->name('about');
Route::get('/services', [Home::class, 'services'])->name('services');
Route::get('/news', [Home::class, 'news'])->name('news');
Route::get('/contact', [Home::class, 'contact'])->name('contact');


