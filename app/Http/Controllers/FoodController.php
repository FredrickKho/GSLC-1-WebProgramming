<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function generateFood()
    {
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
        return $foodData;
    }
    public function viewFood()
    {
        $foodData = FoodController::generateFood();
        return view('food-list', ['foodData' => $foodData]);
    }
}
