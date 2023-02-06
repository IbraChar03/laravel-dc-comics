<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, "home"])->name("home");
Route::get('/show/{person}', [MainController::class, "showPerson"])->name("person.show");
Route::get('/delete/{person}', [MainController::class, "deletePerson"])->name("person.delete");
Route::get('/create', [MainController::class, "createPerson"])->name("person.create");
Route::post('/request', [MainController::class, "requestPerson"])->name("person.request");
Route::get('/edit/{person}', [MainController::class, "editPerson"])->name("person.edit");
Route::post('/update/{person}', [MainController::class, "updatePerson"])->name("person.update");