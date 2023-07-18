<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\RTYJAController;
use App\Http\Controllers\RuangIndependenController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\YJAController;
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
    // Route /admin doang, bakalan redirect ke /admin/login
    Route::get("/", fn () => redirect("/admin/login"));

    // Authenticated Admins
    Route::middleware("auth")->group(function () {
        Route::get('/dashboard', [AdminController::class, "dashboard"]);
        Route::get('/dashboard/{id}', [AdminController::class, "viewmore"])->name('viewmore');
        Route::get('/export', [AdminController::class, "export"])->name('export');
        Route::post('/logout', [AdminController::class, "logout"])->name('logout');
    });

    // Guests
    Route::middleware("guest")->group(function () {
        Route::get('/login', [AdminController::class, "login"])->name('loginAdmin');
        Route::post('/login', [AdminController::class, "verifyLogin"]);
    });
});

Route::get('/form', [FormController::class, "form"])->name('form');
Route::post('/form', [FormController::class, "formValidate"])->name('recruitment.validate');

Route::get('/divisi', [DivisiController::class, "index"])->name('divisi');

Route::get('/workshop', [WorkshopController::class, "workshop"])->name('workshop');
Route::get('/ruangindependen', [RuangIndependenController::class, "ruangindependen"])->name('ruangindependen');
Route::get('/yja', [YJAController::class, "yja"])->name("yja");
Route::get('/rtyja', [RTYJAController::class, "rtyja"])->name("rtyja");

