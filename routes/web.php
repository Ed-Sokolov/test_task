<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/{category}', 'IndexController')->name('posts.category.index');
    });

    Route::get('/', 'IndexController')->name('posts.index');
    Route::post('/', 'StoreController')->name('posts.store');
    Route::get('/{post}', 'ShowController')->name('posts.show');
    Route::get('/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/{post}', 'DestroyController')->name('posts.destroy');
});
