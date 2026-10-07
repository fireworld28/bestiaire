<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('accueil', ['titre' => 'Le Bestiaire']);})->name('accueil');
