<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurEdit;
use App\Http\Controllers\UtilisateursController;


Route::get('/', [UtilisateursController::class, "home"])->name('home');
Route::post('/create', [UtilisateursController::class, "store"]);
Route::delete('/{id}/delete', [UtilisateursController::class, 'destroy']);
Route::get('/UtilisateurEdit/{id}', [UtilisateursController::class, 'show']);
Route::post("/deleteAll",[UtilisateursController::class, "deleteAll"]);


Route::put('/UtilisateurEdit/{id}/update', [UtilisateurEdit::class, 'update']);
