<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
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

Route::get('/', [WeightController::class, 'index']);
Route::get('/login', [WeightController::class, 'showLoginForm'])->name('login');
Route::get('/register', [WeightController::class, 'showRegistrationForm'])->name('register');