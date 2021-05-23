<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use Admin\DrugsController;
use Admin\DrugCategoryController;
use Admin\MeasurementsController;
use Admin\DrugSubCategoryController;
use Admin\DrugGroupController;



/*
|--------------------------------------------------------------------------
| Web Routes

*/
Route::get('/', function () {
    return view('index');
});

// middleware(['auth','auth.adminAccess'])
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('doctors', UserController::class);
    Route::resource('drugs', DrugsController::class);
    Route::resource('drugCategory', DrugCategoryController::class);
    Route::resource('drugSubCategory', DrugSubCategoryController::class);
    Route::resource('drugGroup', DrugGroupController::class);

    Route::resource('measurments', MeasurementsController::class);


});