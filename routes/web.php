<?php

use App\Http\Livewire\Universidad\UniversidadEditarComponent;
use App\Http\Livewire\UniversidadComponent;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //Pagina principal
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Ruta para acceder a la universidad
    Route::get('/universidad', UniversidadComponent::class)->name('universidad');
    //ruta para editar una universidad
    Route::get('/universidad/{id}/editar', UniversidadEditarComponent::class)->name('universidad.editar');

});