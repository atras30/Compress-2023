<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, "login"]);
    Route::post("/login", [AdminController::class, "verifyLogin"]);

    Route::get('/dashboard', [AdminController::class, "dashboard"]);
});

Route::get('/form', [FormController::class, "form"])->name('form');
Route::post('/form', [FormController::class, "formValidate"])->name('recruitment.validate');
