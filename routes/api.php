<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('user')->group(function () {
    // For admin
    Route::post('/admin/register', [AdminController::class, 'register']);
    Route::post('/admin/login', [AdminController::class, 'login']);
    // For Counselor
    Route::post('/counselor/register', [CounselorController::class, 'register']);
    Route::post('/counselor/login', [CounselorController::class, 'login']);
    // For Patient
    Route::post('/patient/register', [PatientController::class, 'register']);
    Route::post('/patient/login', [PatientController::class, 'login']);

});
