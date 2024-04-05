<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $players = [
        "Charles Barkley",
        "Larry Bird",
        "Clyde Drexler",
        "Patrick Ewing",
        "Magic Johnson",
        "Michael Jordan",
        "Christian Laettner",
        "Karl Malone",
        "Chris Mullin",
        "Scottie Pippen",
        "David Robinson",
        "John Stockton"

    ];




    return view('home', compact("players"));
});
