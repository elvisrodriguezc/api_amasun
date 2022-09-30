<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\BoatController as BoatV1;
use App\Http\Controllers\Api\V1\LocationController as LocationV1;
use App\Http\Controllers\Api\V1\ServiceController as ServiceV1;
use App\Http\Controllers\Api\V1\DepartureController as DepartureV1;
use App\Http\Controllers\Api\V1\BookingController as BookingV1;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/locations', LocationV1::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/boats', BoatV1::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/services', ServiceV1::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/departures', DepartureV1::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::apiResource('v1/bookings', BookingV1::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login',[
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
