<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use Admin\DrugsController;
use Admin\MeasurementsController;



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
    return view('index');
});

// middleware(['auth','auth.adminAccess'])
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('doctors', UserController::class);
    Route::resource('drugs', DrugsController::class);
    Route::resource('measurments', MeasurementsController::class);


});