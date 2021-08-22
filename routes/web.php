<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/morseCodes', 'App\Http\Controllers\MorseController@index');
Route::get('/morseToText/{difficulty}', 'App\Http\Controllers\MorseToTextController@showNew');
Route::post('/morseToText/{difficulty}', 'App\Http\Controllers\MorseToTextController@processInput');

Route::get('/textToMorse/{difficulty}', 'App\Http\Controllers\TextToMorseController@test');
Route::post('/textToMorse/{difficulty}', 'App\Http\Controllers\TextToMorseController@processInput');
