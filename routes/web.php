<?php

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

use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'MainController@index')->name('main.index');
    Route::get('/about', 'MainController@about')->name('main.about');
    Route::get('/contacts', 'MainController@contacts')->name('main.contacts');
//    Route::get('/services', 'MainController@services')->name('main.services');
    Route::group(['prefix' => 'services'], function () {
        Route::get('/', 'MainController@services')->name('main.services');
        Route::get('/{service}', 'MainController@service')->name('service.show');
    });
    Route::group(['namespace' => '\Blog', 'prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, '__invoke'])->name('blog.index');
        Route::get('/{post}', [PostController::class, '__invoke'])->name('post.show');
    });

});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
    });

    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('posts', AdminPostController::class);
    Route::resource('services', AdminServiceController::class);
    Route::resource('users', UserController::class);
});

Auth::routes();

