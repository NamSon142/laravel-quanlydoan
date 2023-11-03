<?php

use App\Http\Controllers\Admin\HomeController;
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
Route::group(['prefix' => '/'], function(){
    Route::get('/', function(){
        return "indexx";
    });
    Route::group(['prefix' => '/login'], function(){
        Route::get('/', [HomeController::class, 'getLogin']);
        Route::post('/', [HomeController::class, 'postLogin']);
    });
    Route::get('/logout', [HomeController::class, 'logout']);
});
Route::group(['prefix' => '/admincp', 'middleware' => 'checkAdminLogin'], function () {
    Route::get('/', [HomeController::class, 'index']); 
});
