<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

Route::get('/chollos', [CholloController::class, 'index'])->name('chollos.index');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{id}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{id}', [CholloController::class, 'update'])->name('chollos.update');
Route::delete('/chollos/{id}', [CholloController::class, 'destroy'])->name('chollos.destroy');


Route::get('/', function () {
    return view('welcome');
});
