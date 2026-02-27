<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\About;
use App\Livewire\Medicines;
use App\Livewire\PatientManager;
use App\Livewire\PatientDetail;
use App\Livewire\Dashboard;
use App\Livewire\Home;
use App\Livewire\Services;
use App\Livewire\Landing;
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hpage', Landing::class)->name('hpage');

Route::get('/landing', Landing::class)->name('landing');
Route::get('medicines', Medicines::class)
    ->middleware(['auth', 'verified'])
    ->name('medicines');  
// Route::get('/',         Home::class)->name('home');

Route::prefix('nlah')->name('nlah.')->group(function () {

    Route::view('/home', 'nlah.home')->name('home');
    Route::view('/about', 'nlah.about')->name('about');
    Route::view('/services', 'nlah.services')->name('services');

});

Route::view('reports', 'reports')
    ->middleware(['auth', 'verified'])
    ->name('reports');    

Route::get('/dashboard', Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/patients',PatientManager::class)
    ->middleware(['auth', 'verified'])
    ->name('patients');
Route::get('/dispense', \App\Livewire\DispenseMedicine::class)
    ->middleware(['auth', 'verified'])
    ->name('dispense');

Route::middleware(['auth'])->group(function () {
    Route::redirect('/checklist', '/checklist/check')->name('checklist');
    Route::redirect('/checklist/profile', '/checklist/check');
    Route::livewire('/checklist/check', 'pages::checklist.check')->name('checklist.check');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::livewire('/checklist/appearance', 'pages::checklist.appearance')->name('checklist.appearance');
});


Route::get('/patients/{id}', PatientDetail::class)->name('patient.details');

require __DIR__.'/settings.php';
