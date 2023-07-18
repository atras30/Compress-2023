<?php

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

Route::get("/time/diff", function (Request $request) {
    $startDates = [];
    foreach (explode(",", $request->startDates) as $startDate) {
        $startDates[] = new Carbon($startDate, 'Asia/Jakarta');
    }

    $parsedDates = [];
    foreach ($startDates as $startDate) {
        $days = $startDate->diffInDays(Carbon::now());
        $hour = $startDate->diffInHours(Carbon::now()) % 24;
        $minute = $startDate->diffInMinutes(Carbon::now()) % 60;
        $second = $startDate->diffInSeconds(Carbon::now()) % 60;
        $parsedDate =    sprintf('%02d Days, %02d:%02d:%02d', $days, $hour, $minute, $second);
        $parsedDates[] = $parsedDate;
    }

    return response()->json([
        "message" => "success",
        "parsedDates" => $parsedDates
    ], Response::HTTP_OK);
})->name("time.diff");
