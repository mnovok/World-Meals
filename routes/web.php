<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;


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
    return view('welcome');
});

Route::get('list', [MealController::class, 'show']); 

Route::get('search', [MealController::class, 'search']);

Route::get('/', [MealController::class, 'index']);
Route::get('/getMeals', [MealController::class, 'getMeals']);
Route::post('/getMealsByCategory', [MealController::class, 'getMealsByCategory']);

Route::post('search-record', 'App\Http\Controllers\MealController@search');