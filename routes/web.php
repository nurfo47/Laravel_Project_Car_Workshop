<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarWorkerController;
use App\Http\Controllers\CarPartsController;

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

/*Route::get('/', function () {
    $lat=44.81694;
    $lon=15.87083;
    $api_key=config('services.openweather.key');

    $response=Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&cnt=5&appid={$api_key}&units=metric");
    return view('dashboard',[
        'currentWeather'=>$response->json(),
    ]);
});*/

Route::middleware(['auth:sanctum','verified'])->group(function () {Route::get('/', function () {
    $lat=44.81694;
    $lon=15.87083;
    $api_key=config('services.openweather.key');

    $response=Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&cnt=5&appid={$api_key}&units=metric");
    return view('dashboard',[
        'currentWeather'=>$response->json()]);})->name('dashboard');});

//-----------------------------Routes-----------------------------------------
Route::middleware(['auth:sanctum','verified'])->get('cars', [CarController::class, 'index'])->name('cars');
//Routes to add and store brands
Route::middleware(['auth:sanctum','verified'])->get('brands', [BrandController::class, 'index'])->name('brands');
Route::middleware(['auth:sanctum','verified'])->get('add_brand', [BrandController::class, 'create'])->name('add_brand');
Route::middleware(['auth:sanctum','verified'])->post('store_brand', [BrandController::class, 'store'])->name('store_brand');
//Routes for Form to add data to 3 tables
Route::middleware(['auth:sanctum','verified'])->get('add_new', [CarWorkerController::class, 'create'])->name('add_new');
Route::middleware(['auth:sanctum','verified'])->post('store_new', [CarWorkerController::class, 'store'])->name('store_new');
// Routes for car parts
Route::middleware(['auth:sanctum','verified'])->get('parts', [CarPartsController::class, 'index'])->name('parts');
Route::middleware(['auth:sanctum','verified'])->get('add_part', [CarPartsController::class, 'create'])->name('add_part');
Route::middleware(['auth:sanctum','verified'])->post('store_part', [CarPartsController::class, 'store'])->name('store_part');