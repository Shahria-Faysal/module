<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogCategoryController;
use Modules\Blog\Http\Controllers\BlogController;



Route::group(['prefix' => 'blogs', 'name' => "blog."], function () {
    Route::resource('/', BlogController::class);

    Route::resource('/category', BlogCategoryController::class);
});
