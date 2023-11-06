<?php

use Illuminate\Support\Facades\Route;
use App\Models\Etudiant;


Route::get('/dashboard', function () {
    $sales=Etudiant::all();
    return view('welcome',compact('sales'));
});