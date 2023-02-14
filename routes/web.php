<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
//Route::get('user/{user}', [UserController::class,'show']);


// rota para chamada do Admin
//Route::get('adm',[PostController::class,'show']);
Route::prefix('adm')->group(function(){
    Route::get('',[PostController::class,'show']);
    Route::get('/create',[PostController::class,'insert']);
});
