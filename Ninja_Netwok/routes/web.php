<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Barbers', function () {
    $Barbers = [
        ['Name' => 'Mario', 'Job' => 'Barber', 'Age' => 45, 'id' => 1],
        ['Name' => 'Luigi', 'Job' => 'Barber', 'Age' => 39 , 'id' => 2],
        ['Name' => 'Peach', 'Job' => 'Barber', 'Age' => 43, 'id' => 3],
        ['Name' => 'Toad', 'Job' => 'Barber', 'Age' => 25, 'id' => 4],
        ['Name' => 'Yoshi', 'Job' => 'Barber', 'Age' => 32, 'id' => 5],
    ];
    return view('barbers.index', ['Barbers' => $Barbers]);
});
Route::get('/Barbers/Create', function () {
    return view('barbers.create');
});
Route::get('/Barbers/{id}', function ($id) {
    $Barbers = [
        ['Name' => 'Mario', 'Job' => 'Plumber', 'Age' => 45, 'id' => 1],
        ['Name' => 'Luigi', 'Job' => 'Plumber', 'Age' => 39 , 'id' => 2],
        ['Name' => 'Peach', 'Job' => 'Princess', 'Age' => 43, 'id' => 3],
        ['Name' => 'Toad', 'Job' => 'A Shroom Thing idk', 'Age' => 25, 'id' => 4],
        ['Name' => 'Yoshi', 'Job' => 'A Dinosaur', 'Age' => 32, 'id' => 5],
    ];
    return view('barbers.show', ['barber' => $Barbers[$id - 1]]);
});