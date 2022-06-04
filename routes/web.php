<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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

Route::get('/', function () {
    return view('register');
});

Route::group(['prefix' => 'application'], function () {
    Route::get('/read', [ApplicationController::class, 'read']);
    Route::post('/store', [ApplicationController::class, 'store']);
	// Route::get('/read', 'ApplicationController@read')->name('application.read');
    // Route::post('/store', 'ApplicationController@store')->name('application.register');
});


Route::get('/list', function () {
    return view('index');
});
