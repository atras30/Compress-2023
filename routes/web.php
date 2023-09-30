<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\RTYJAController;
use App\Http\Controllers\RuangIndependenController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\TalkshowController;
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
        Route::get('/dashboard/{id}/pdf', [AdminController::class, "viewmorePDF"])->name('viewmorePDF');
        Route::get('/dashboard/{id}/bukti', [AdminController::class, "viewmoreBukti"])->name('viewmoreBukti');
        Route::get('/export', [AdminController::class, "export"])->name('export');
        Route::post('/logout', [AdminController::class, "logout"])->name('logout');
    });

    // Guests
    Route::middleware("guest")->group(function () {
        Route::get('/login', [AdminController::class, "login"])->name('loginAdmin');
        Route::post('/login', [AdminController::class, "verifyLogin"]);
    });
});

Route::prefix('/ruangindependen')->group(function () {
    Route::get('/', [RuangIndependenController::class, "ruangindependen"])->name('ruangindependen');
    Route::prefix(('/daftar'))->group(function(){
        Route::get('', [RuangIndependenController::class, "daftarruangindependen"])->name('daftarruangindependen');

        Route::get('/mobile-journalism', [RuangIndependenController::class, "mobile_journalism"])->name('mobile_journalism');
        Route::post('/mobile-journalism', [RuangIndependenController::class, "formValidateMOJO"])->name('validateMOJO');

        Route::get('/long-form-article', [RuangIndependenController::class, "long_form_article"])->name('long_form_article');
        Route::post('/long-form-article', [RuangIndependenController::class, "formValidateLFA"])->name('validateLFA');

        Route::get('/news-infographic', [RuangIndependenController::class, "news_infographic"])->name('news_infographic');
        Route::post('/news-infographic', [RuangIndependenController::class, "formValidateNI"])->name('validateNI');

        Route::get('/terimakasih', [RuangIndependenController::class, "akhirruangindependen"])->name('akhirruangindependen');
    });
});

Route::get('/form', [FormController::class, "form"])->name('form');
Route::post('/form', [FormController::class, "formValidate"])->name('recruitment.validate');

Route::get('/divisi', [DivisiController::class, "index"])->name('divisi');

Route::prefix("/workshop")->group(function() {
    Route::get('/', [WorkshopController::class, "workshop"])->name('workshop');
    Route::get('/registration', [WorkshopController::class, "registrationView"])->name('workshop.registration');
    Route::post('/registration', [WorkshopController::class, "register"])->name('workshop.registration');
});



Route::prefix('/talkshow')->group(function(){
    Route::get('/', [TalkshowController::class, "talkshow"])->name('talkshow');
    Route::get('/before', [TalkshowController::class, "before"])->name('before');

    Route::prefix(('/daftar'))->group(function(){
        Route::get('/', [TalkshowController::class, "daftarTalkshow"])->name('daftarTalkshow');
        Route::post('/', [TalkshowController::class, "formValidateTalkshow"])->name('validateTalkshow');

        Route::get('/terimakasih', [TalkshowController::class, "thankyouform"])->name('thankyouform');
    });
});

Route::get('/yja', [YJAController::class, "yja"])->name("yja");
Route::get('/rtyja', [RTYJAController::class, "rtyja"])->name("rtyja");

