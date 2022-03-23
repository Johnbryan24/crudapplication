<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[ UserController::class, 'index']);
Route::get('/create',[ UserController::class, 'create']);
Route::get('/store',[ UserController::class, 'store']);

//Route::get('/view',[ UserController::class, 'view']);
// Route::resource('/ved', UserController::class);


// Route::get('/ved/{id}/view',[ UserController::class, 'view']);
// Route::get('/ved/{id}/edit',[ UserController::class, 'edit']);


Route::get('/{id}/view',[ UserController::class, 'view']);
Route::get('/{id}/edit',[ UserController::class, 'edit']);
