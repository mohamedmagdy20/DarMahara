<?php

use App\Http\Controllers\Dashboard\ArticlesController;
use App\Http\Controllers\Dashboard\ServicesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\Home::class, 'index'])->name('home');
Route::get('/services', [\App\Http\Controllers\Services::class, 'index'])->name('services');
Route::get('/services/{url}', [\App\Http\Controllers\Services::class, 'getServiceDetails'])->name('service');
Route::get('/article/{url}', [\App\Http\Controllers\ArticleController::class, 'getArticleDetails'])->name('article');
Route::post('/message/add', [\App\Http\Controllers\Home::class, 'addMessage'])->name('add.message');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::middleware('auth')->group(function () {
        Route::get('/services', [ServicesController::class, 'index'])->name('admin.services.show');
        Route::get('/services/add', [ServicesController::class, 'add'])->name('admin.services.add');
        Route::post('/services/store', [ServicesController::class, 'store'])->name('admin.services.store');
        Route::get('/services/edit/{service_id}', [ServicesController::class, 'edit'])->name('admin.services.edit');
        Route::post('/services/update', [ServicesController::class, 'update'])->name('admin.services.update');
        Route::get('/services/delete/{service_id}', [ServicesController::class, 'delete'])->name('admin.services.delete');

        Route::get('/articles', [ArticlesController::class, 'index'])->name('admin.articles.show');
        Route::get('/articles/add', [ArticlesController::class, 'add'])->name('admin.articles.add');
        Route::post('/articles/store', [ArticlesController::class, 'store'])->name('admin.articles.store');
        Route::get('/articles/edit/{article_id}', [ArticlesController::class, 'edit'])->name('admin.articles.edit');
        Route::post('/articles/update', [ArticlesController::class, 'update'])->name('admin.articles.update');
        Route::get('/articles/delete/{artical_id}', [ArticlesController::class, 'delete'])->name('admin.articles.delete');
    });
});
