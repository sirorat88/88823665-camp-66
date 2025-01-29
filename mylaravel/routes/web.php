<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;



Route::get("/login",
    [LoginController::class, 'index']);

Route::get("/register",
    [RegisterController::class, 'index']);

Route::get("/home",
    [HomeController::class, 'index']);

Route::get("/",
    [HomeController::class, 'index']);


Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class, 'MYFUNCTION']);

