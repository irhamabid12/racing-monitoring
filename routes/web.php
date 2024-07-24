<?php

use App\Events\ListenDataEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ListerningDataController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/registration', function () {
    return view('registration');
})->name('registration');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/insertNewUser', [RegistrationController::class, 'insertNewUser'])->name('insertNewUser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [ListerningDataController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/test', function () {
    return view('test');
})->name('test');