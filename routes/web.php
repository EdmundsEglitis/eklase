<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\BklaseController; 
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
Route::get('/', [IndexController::class, "index"]);

Route::get("/register", [UserController::class, "create"]);
Route::post("/register", [UserController::class, "store"]);


Route::post("/", [IndexController::class, "signin"]); // Ļoti nepareizi, labāk būtu login2, vēl labāk - uztaisīt atsevišķu Controller
Route::get("/bklase", [BklaseController::class, "index"]);