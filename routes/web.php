<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

Route::get('/',  [AppController::class, 'home'])->name('home');

Route::get('/register/employee', [UserController::class, 'create'])->name('register-employee');
Route::post('/register/employee', [EmployeeController::class, 'store']);