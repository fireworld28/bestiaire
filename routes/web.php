<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;

Route::get('/', function () {return view('accueil', ['titre' => 'Le Bestiaire']);})->name('accueil');

Route::get('/creature', [CreatureController::class, 'index'])->name('creature.index');
Route::get('/creature/create', [CreatureController::class, 'create'])->name('creature.create');
Route::post('/creature/', [CreatureController::class, 'store'])->name('creature.store');
Route::get('/creature/{creature}', [CreatureController::class, 'show'])->name('creature.show');




 