<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminMenuController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('home');
})->name('halaman.home');

Route::get('/menu', function () {
    return view('menu');
})->name('halaman.menu');




