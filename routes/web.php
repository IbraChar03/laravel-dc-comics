<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "home"])->name("home");
Route::get('/show/{person}', [MainController::class, "showPerson"])->name("person.show");