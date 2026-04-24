<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/properties', [PropertyController::class, 'index']);
    
Route::get('/login', [LoginController::class, 'index']);




// Route::get('/', function () {
//     return view('login.index');
// })->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');




Route::get('/rent', [RentController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/tenant', [TenantController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});





