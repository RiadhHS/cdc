<?php

use App\Http\Controllers\CoproprietaireController;
use App\Http\Controllers\DepotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InscriptionAGController;
use App\Http\Controllers\InscriptionOJAGController;
Route::get('/', [IndexController::class, "index"])->name("/");

Route::get('/visiteurs', [VisiteurController::class, 'index'])->name("visiteurs");
Route::get('/coproprietaire', [CoproprietaireController::class, 'index'])->name("coproprietaire"); 
Route::get('/inscriptionag', [InscriptionAGController::class, 'index'])->name("inscriptionag"); 
Route::get('/inscriptionojag', [InscriptionOJAGController::class, 'index'])->name("inscriptionojag"); 
Route::get('/depot', [DepotController::class, 'index'])->name("depot");
