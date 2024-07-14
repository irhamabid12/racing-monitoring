<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListerningDataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

# route api untuk insert data parameter alat
Route::post('/pushdata', [ListerningDataController::class, 'pushdata']);