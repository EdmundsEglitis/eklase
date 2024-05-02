<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\BklaseController; 
use App\Http\Controllers\CreateController; 
use App\Http\Controllers\ViewController; 
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
Route::get("/register", [UserController::class, "create"]);
Route::post("/register", [UserController::class, "store"]);

Route::get('/', [IndexController::class, "index"]);
Route::get("/brivlaiki", [IndexController::class, "brivlaiki"]);
Route::get("/logout", [IndexController::class, "logout"]);
Route::post("/", [IndexController::class, "signin"]); // Ļoti nepareizi, labāk būtu login2, vēl labāk - uztaisīt atsevišķu Controller
Route::get("/bklase", [BklaseController::class, "__invoke"]);

Route::get("/create-lessons", [CreateController::class, "create"]);
Route::post("/create-lessons", [CreateController::class, "store"]);
Route::get("/delete-lessons", [CreateController::class, "view"]);
Route::post("/delete-lessons", [CreateController::class, "delete"]);
Route::get("/update-lessons", [CreateController::class, "update"]);
Route::get("/gradding", [CreateController::class, "grade"]);
Route::get("/view-all-lessons", [CreateController::class, "viewAll"]);
Route::get("/view-all-lessons{groupId", [CreateController::class, "viewSpecific"]);

Route::get("/view-lessons", [ViewController::class, "viewLessons"]);
Route::get("/view-grades/{userId", [ViewController::class, "viewGrades"]);