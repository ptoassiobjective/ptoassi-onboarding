<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercises\OneController;
use App\Http\Controllers\Exercises\TwoController;
use App\Http\Controllers\Exercises\ThreeController;
use App\Http\Controllers\Exercises\FourController;

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
    return view('welcome');
});


Route::prefix('/exercises')->group(function () {
    Route::get('one', [OneController::class, 'exerciseOne']);
    Route::get('two', [TwoController::class, 'exerciseTwo']);
    Route::get('three', [ThreeController::class, 'exerciseThree']);
    Route::get('four', [FourController::class, 'exerciseFour']);
});
