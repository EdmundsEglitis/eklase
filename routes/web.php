<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\BklaseController; 
use App\Http\Controllers\CreateController; 
use App\Http\Controllers\ViewController; 
use App\Http\Controllers\ShowController; 
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

Route::post("/", [IndexController::class, "signin"]);
Route::get('/', [IndexController::class, "index"]);
Route::get("/brivlaiki", [IndexController::class, "brivlaiki"]);

Route::middleware(['auth', 'CheckAdmin'])->group(function () {
    Route::get("/register", [UserController::class, "create"]);
    Route::post("/register", [UserController::class, "store"]);
    Route::get("/create-lessons", [CreateController::class, "create"]);
    Route::post("/create-lessons", [CreateController::class, "store"]);

    Route::get("/delete-lessons", [CreateController::class, "view"]);
    Route::post("/delete-lessons", [CreateController::class, "delete"]);

    Route::get("/update-group/{groupId}/{day}", [CreateController::class, "updateGroup"]);
    Route::post("/update-group", [CreateController::class, "updateLessons"]);
    Route::get("/grade-students", [CreateController::class, "grade"]);
    Route::post("/save-grades", [CreateController::class, "saveGrades"]);

    Route::get("/show-all", [CreateController::class, "viewAll"]);
    Route::get("/view/{groupId}", [CreateController::class, "specific"]);
});
Route::middleware(['auth', 'CheckUser'])->group(function () {
Route::get("/view-lessons", [ViewController::class, "viewLessons"]);
Route::get("/view-grades", [ViewController::class, "viewGrades"]);
Route::get("/bklase", [BklaseController::class, "__invoke"]);
Route::get("/logout", [IndexController::class, "logout"]);
});
Route::get('/', function () {
    $news = App\Models\News::all(); // Replace 'News' with your actual model name
    return view('index', compact('news'));
})->name('home');