<?php

use App\Http\Controllers\RuangIndependenController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ruangindependen/like', [RuangIndependenController::class, "like"])->name('karya.like');


Route::get("/time/diff", function (Request $request) {
    $startDates = [];
    foreach (explode(",", $request->startDates) as $startDate) {
        $startDates[] = new Carbon($startDate, 'Asia/Jakarta');
    }

    $parsedDates = [];
    foreach ($startDates as $startDate) {
        $days = $startDate > Carbon::now() ? $startDate->diffInDays(Carbon::now()) : 0;
        $hour = $startDate > Carbon::now() ? $startDate->diffInHours(Carbon::now()) % 24 : 0;
        $minute = $startDate > Carbon::now() ? $startDate->diffInMinutes(Carbon::now()) % 60 : 0;
        $second = $startDate > Carbon::now() ? $startDate->diffInSeconds(Carbon::now()) % 60 : 0;

        $parsedDate =    sprintf('%02d Days, %02d:%02d:%02d', $days, $hour, $minute, $second);
        $parsedDates[] = $parsedDate;
    }

    return response()->json([
        "message" => "success",
        "parsedDates" => $parsedDates
    ], Response::HTTP_OK);
})->name("time.diff");
