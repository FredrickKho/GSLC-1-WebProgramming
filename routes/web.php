<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/food-list', function () {
    $foodData = [
        [
            'id' => 1,
            'name' => 'Nasi Goreng Ayam',
            'ordered' => 9283,
            'rating' => 5
        ], [
            'id' => 2,
            'name' => 'Nasi Goreng Ikan',
            'ordered' => 3283,
            'rating' => 3
        ], [
            'id' => 3,
            'name' => 'Nasi Goreng Sapi',
            'ordered' => 4383,
            'rating' => 2
        ], [
            'id' => 4,
            'name' => 'Mie Goreng Ayam',
            'ordered' => 10289,
            'rating' => 4
        ], [
            'id' => 5,
            'name' => 'Bubur Ayam',
            'ordered' => 4029,
            'rating' => 3
        ], [
            'id' => 6,
            'name' => 'Spagetti Italia',
            'ordered' => 2938,
            'rating' => 1
        ], [
            'id' => 7,
            'name' => 'Kentang Goreng',
            'ordered' => 1930,
            'rating' => 4
        ], [
            'id' => 8,
            'name' => 'Dimsum',
            'ordered' => 5055,
            'rating' => 3
        ], [
            'id' => 9,
            'name' => 'Soto Ayam',
            'ordered' => 29332,
            'rating' => 5
        ], [
            'id' => 10,
            'name' => 'Sop Ayam',
            'ordered' => 7763,
            'rating' => 3
        ], [
            'id' => 11,
            'name' => 'Sop Sayur',
            'ordered' => 19312,
            'rating' => 4
        ], [
            'id' => 12,
            'name' => 'Ikan Goreng',
            'ordered' => 33203,
            'rating' => 5
        ],
    ];
    return view('food-list', ['foodData' => $foodData]);
})->name('food-list');

Route::get('/drink-list', function () {
    $drinkData = [
        [
            'id' => 1,
            'name' => 'Teh Tawar',
            'ordered' => 39033,
            'rating' => 4
        ], [
            'id' => 2,
            'name' => 'Teh Manis',
            'ordered' => 3213,
            'rating' => 4
        ], [
            'id' => 3,
            'name' => 'Kopi susu',
            'ordered' => 9823,
            'rating' => 5
        ], [
            'id' => 4,
            'name' => 'Kopi Jahe',
            'ordered' => 1112,
            'rating' => 2
        ], [
            'id' => 5,
            'name' => 'Orange Juice',
            'ordered' => 4933,
            'rating' => 5
        ], [
            'id' => 6,
            'name' => 'Air Mineral',
            'ordered' => 24443,
            'rating' => 5
        ], [
            'id' => 7,
            'name' => 'Apple Juice',
            'ordered' => 33530,
            'rating' => 5
        ], [
            'id' => 8,
            'name' => 'Coca-cola',
            'ordered' => 65555,
            'rating' => 5
        ], [
            'id' => 9,
            'name' => 'Sprite',
            'ordered' => 20092,
            'rating' => 5
        ], [
            'id' => 10,
            'name' => 'Sparkling Water',
            'ordered' => 6643,
            'rating' => 1
        ]
    ];
    return view('drink-list', ['drinkData' => $drinkData]);
})->name('drink-list');
