<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

route::get('/cina', function () {
    echo "Halo Sobat Sipit";
});

route::get("/food", [FoodController::class, "index"])->name("food.index");

route::delete("/food/{id}", [FoodController::class, "destroy"]);

route::get("/food/create", [FoodController::class, "create"])->name("food.create");
route::post("/food", [FoodController::class, "store"])->name("food.store");

route::get("/food/{id}", [FoodController::class, "edit"]);
route::put("/food/{id}", [FoodController::class, "update"])->name("food.update");
