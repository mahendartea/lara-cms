<?php

use App\Livewire\Home;
use App\Livewire\Registerasi;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/register', Registerasi::class)->name('registerasi');
