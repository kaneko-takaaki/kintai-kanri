<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\BreakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'index']);
});
//Route::get('/login', [AuthController::class, 'login']);
//Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/workstart', [WorkController::class, 'workStart']);
Route::get('/workend', [WorkController::class, 'workEnd']);
Route::get('/breakstart', [BreakController::class, 'breakStart']);
Route::get('/breakend', [BreakController::class, 'breakEnd']);
