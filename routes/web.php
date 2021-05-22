<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use Admin\DrugsController;
<<<<<<< HEAD
use Admin\DrugCategoryController;
=======
use Admin\MeasurementsController;


>>>>>>> 92d3c5b18e04df5266853f92d8fbd67695d0d4d1

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
<<<<<<< HEAD
    Route::resource('drugCategory', DrugCategoryController::class);
=======
    Route::resource('measurments', MeasurementsController::class);

>>>>>>> 92d3c5b18e04df5266853f92d8fbd67695d0d4d1

});