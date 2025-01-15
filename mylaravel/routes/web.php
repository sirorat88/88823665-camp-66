<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/mycontroller' , [
    MyController::class, 'myfunction'
]);

Route::post('/mycontroller/{id?}',
    [MyController::class, 'myfunction'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello World! $val</h1>";
});

Route::get("/mycontroller/{id?}",[MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}",[MyController::class,'myfunction']);
