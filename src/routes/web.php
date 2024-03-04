<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

//Route::get('/register', [RegisterController::class, 'index']);

//Route::post('/register', [RegisterController::class, 'store']);

//Route::get('/login', [AuthController::class, 'index']);

//Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/', [AttendanceController::class, 'index']);

    Route::post('/attendance/start', [AttendanceController::class, 'startAttendance']);

    Route::post('/attendance/end', [AttendanceController::class, 'endAttendance']);

    Route::post('/rest/start', [AttendanceController::class, 'startRest']);

    Route::post('/rest/end', [AttendanceController::class, 'endRest']);

    Route::get('/attendance/{num}', [AttendanceController::class, 'getAttendance']);
});