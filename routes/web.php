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

Route::get('/games', function () {


    return view('games');
})->name('partite');

Route::get('/staff', function () {


    $members = [
        "Allenatore capo: Chuck Daly, New Jersey Nets",
        "Assistente allenatore: Lenny Wilkens, Cleveland Cavaliers",
        "Assistente allenatore: P.J. Carlesimo, Seton Hall University (NJ)",
        "Assistente allenatore: Mike Krzyzewski, Duke University (NC)",
        "Medico di squadra: David Fischer, Minneapolis (MN)",
        "Medico di squadra: Steve Lombardo, Los Angeles Lakers",
        "Medico di squadra: Norman Scott, New York Knicks",
        "Preparatore atletico: Ed Lacerte, Boston Celtics",

    ];


    return view('staff', compact("members"));
})->name('staff');
