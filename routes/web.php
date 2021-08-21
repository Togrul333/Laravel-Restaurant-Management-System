<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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

Route::get("/",[\App\Http\Controllers\HomeController::class,"index"]);

Route::get("/users",[\App\Http\Controllers\AdminController::class,"user"]);

Route::get("/deletemenu/{id}",[\App\Http\Controllers\AdminController::class,"deletemenu"]);

Route::get("/updateview/{id}",[\App\Http\Controllers\AdminController::class,"updateview"]);


Route::post("/update/{id}",[\App\Http\Controllers\AdminController::class,"update"]);


Route::get("/foodmenu",[\App\Http\Controllers\AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[\App\Http\Controllers\AdminController::class,"upload"]);


Route::get("/deleteuser/{id}",[\App\Http\Controllers\AdminController::class,"deleteuser"]);


Route::get("/redirects",[\App\Http\Controllers\HomeController::class,"redirects"]);


Route::post("/reservation",[\App\Http\Controllers\AdminController::class,"reservation"]);

Route::get("/viewreservation",[\App\Http\Controllers\AdminController::class,"viewreservation"]);


Route::get("/viewchef",[\App\Http\Controllers\AdminController::class,"viewchef"]);

Route::post("/uploadchef",[\App\Http\Controllers\AdminController::class,"uploadchef"]);

Route::get("/updatechef/{id}",[\App\Http\Controllers\AdminController::class,"updatechef"]);

Route::post("/updatefoodchef/{id}",[\App\Http\Controllers\AdminController::class,"updatefoodchef"]);

Route::get("/deletechef/{id}",[\App\Http\Controllers\AdminController::class,"deletechef"]);

Route::post("/addcart/{id}",[\App\Http\Controllers\HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[\App\Http\Controllers\HomeController::class,"showcart"]);

Route::get("/remove/{id}",[\App\Http\Controllers\HomeController::class,"remove"]);


Route::post("/orderconfirm",[\App\Http\Controllers\HomeController::class,"orderconfirm"]);

Route::get("/orders",[\App\Http\Controllers\AdminController::class,"orders"]);

Route::get("/search",[\App\Http\Controllers\AdminController::class,"search"]);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
