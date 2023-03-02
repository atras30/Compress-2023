<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisiController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, "login"])->middleware('guest')->name('loginAdmin');
    Route::post('/login', [AdminController::class, "verifyLogin"])->middleware('guest');
    Route::post('/logout', [AdminController::class, "logout"])->name('logout');

<<<<<<< HEAD
    Route::get('/dashboard', [AdminController::class, "dashboard"]);
    Route::get('/dashboard/{id}', [AdminController::class, "viewmore"])->name('viewmore');
    Route::get('/export', [AdminController::class, "export"])->name('export');
    
=======
    Route::get('/dashboard', [AdminController::class, "dashboard"])->middleware('auth');
    Route::get('/export', [AdminController::class, "export"])->middleware('auth')->name('export');
>>>>>>> 7cc630d28d489c4f84dbc554ec2cc69f419dd831
});

Route::get('/form', [FormController::class, "form"])->name('form');
Route::post('/form', [FormController::class, "formValidate"])->name('recruitment.validate');

Route::get('/divisi', [DivisiController::class, "index"])->name('divisi');