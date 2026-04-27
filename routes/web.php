<?php

use App\Http\Controllers\CardsController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaseController;

route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function() {
    return view('dashboard');
})->name('dashboard');

// Route::get('/tenants', [TenantController::class, 'tenants']);

Route::get('/rent', [RentController::class, 'index'])->name('rent.index');

//from
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/create', function () {
    return view('properties.create');
});


// Route::get('/login', [LoginController::class, 'index'])->name('login.index');



Route::get('/login', function () {
    return view('login.index');
})->name('login');

Route::post('/login', function (Request $request) {
    return view('users.index');
})->name('users.index');


Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/tenants', [TenantController::class, 'index'])->name('tenants.index');


Route::get('/payment', function () {
    return view('payment.index');
})->name('payments');

Route::get('layout', function () {
    return view('layout');
});

Route::get('/leases', [LeaseController::class, 'index'])->name('leases.index');

