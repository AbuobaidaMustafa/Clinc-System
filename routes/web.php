<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use Admin\DrugsController;
use Admin\DrugCategoryController;

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

});