<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\eusercontroller;
use App\Http\Controllers\homecontroller;

Route::get('/customer', [customercontroller::class, 'index'])->name('customer');
Route::get('/euser', [eusercontroller::class, 'index'])->name('user');
Route::get('/', [homecontroller::class, 'index'])->name('home');

