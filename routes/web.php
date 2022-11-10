<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/food-list', [FoodController::class, 'viewFood'])->name('food-list');

Route::get('/drink-list', [DrinkController::class, 'viewDrink'])->name('drink-list');
