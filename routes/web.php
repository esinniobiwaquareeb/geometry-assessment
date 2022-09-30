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
    return view('welcome');
});

Route::get('triangle/{a}/{b}/{c}', [App\Http\Controllers\MainController::class, 'triangle'])->name('triangle');

Route::get('circle/{radius}', [App\Http\Controllers\MainController::class, 'circle'])->name('circle');

// Geometry Service
Route::get('app.geometry_calculator', [App\Http\Controllers\GeometryCalculatorController::class, 'geometry_calculator'])->name('app.geometry_calculator');
