<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AnneeacaController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\InscriptionController;


Route::get('/etudiants', [EtudiantController::class, 'index']);
Route::get('/etudiants/{id}', [EtudiantController::class, 'show']);
Route::post('/etudiants', [EtudiantController::class, 'store']);
//Route::post('/login', [AuthController::class, 'login']);
Route::put('/etudiants/{id}',[EtudiantController::class, 'update']);
Route::delete('/etudiants/{id}',[EtudiantController::class, 'destroy']);


//Route Formation:
Route::get('/formations', [FormationController::class, 'index']);
Route::get('/formations/{id}', [FormationController::class, 'show']);
Route::post('/formations', [FormationController::class, 'store']);
//Route::post('/login', [AuthController::class, 'login']);
Route::put('/formations/{id}',[FormationController::class, 'update']);
Route::delete('/formations/{id}',[FormationController::class, 'destroy']);
//Route::post('/login', 'AuthController@login');

//Route Annee Academique
Route::get('/anneesacademie', [AnneeacaController::class, 'index']);
Route::get('/anneesacademie/{id}',[AnneeacaController::class,'show']);
Route::post('/anneesacademie', [AnneeacaController::class, 'store']);
//Route::post('/login', [AuthController::class, 'login']);
Route::put('/anneesacademie/{id}',[AnneeacaController::class, 'update']);
Route::delete('/anneesacademie/{id}',[AnneeacaController::class, 'destroy']);

//Route Niveau d'etude
Route::get('/niveau', [NiveauController::class, 'index']);
Route::get('/niveau/{id}',[NiveauController::class,'show']);
Route::post('/niveau', [NiveauController::class, 'store']);
Route::put('/niveau/{id}',[NiveauController::class, 'update']);
Route::delete('/niveau/{id}',[NiveauController::class, 'destroy']);

//Route Inscription
Route::get('/inscrire', [InscriptionController::class, 'index']);
Route::get('/inscrire/{id}',[InscriptionController::class,'show']);
Route::post('/inscrire',[InscriptionController::class,'store']);
Route::put('/inscrire/{id}',[InscriptionController::class,'update']);
Route::delete('/inscrire/{id}',[InscriptionController::class,'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});