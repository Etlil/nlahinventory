<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\About;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('hr', 'HR')
    ->middleware(['auth', 'verified'])
    ->name('hr');    

Route::view('statements', 'statements')
    ->middleware(['auth', 'verified'])
    ->name('statements');    


require __DIR__.'/settings.php';
