<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function generateDrink()
    {
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
        return $drinkData;
    }
    public function viewDrink()
    {
        $drinkData = DrinkController::generateDrink();
        return view('drink-list', ['drinkData' => $drinkData]);
    }
}
