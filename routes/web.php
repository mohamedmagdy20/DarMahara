<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\ArticlesController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\DiscountController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\SocialMediaController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\ProfileController;

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
        Route::get('/',[HomeController::class,'index'])->name('admin.index');
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
        Route::post('/articles/update}', [ArticlesController::class, 'update'])->name('admin.articles.update');
        Route::get('/articles/delete/{artical_id}', [ArticlesController::class, 'delete'])->name('admin.articles.delete');

        Route::get('/discount',[DiscountController::class,'index'])->name('admin.discount');
        Route::get('/discount/edit/{id}',[DiscountController::class,'edit'])->name('admin.discount.edit');
        Route::post('/discount/update',[DiscountController::class,'update'])->name('admin.discount.update');
        

        Route::get('/about',[AboutController::class,'index'])->name('admin.about.index');
        Route::get('/about/edit/{id}',[AboutController::class,'edit'])->name('admin.about.edit');
        Route::post('/about/update',[AboutController::class,'update'])->name('admin.about.update');


        Route::get('/social',[SocialMediaController::class,'index'])->name('admin.social.index');
        Route::get('/social/create',[SocialMediaController::class,'create'])->name('admin.social.create');
        Route::get('/social/edit/{id}',[SocialMediaController::class,'edit'])->name('admin.social.edit');
        Route::post('/social/store',[SocialMediaController::class,'store'])->name('admin.social.store');
        Route::post('/social/update',[SocialMediaController::class,'update'])->name('admin.social.update');
        Route::get('/social/delete/{id}',[SocialMediaController::class,'delete'])->name('admin.social.delete');

        Route::get('/message',[MessageController::class,'index'])->name('admin.message.index');


        Route::get('/profile',[ProfileController::class,'index'])->name('admin.profile.index');
        Route::get('/profile/edit',[ProfileController::class,'edit'])->name('admin.profile.edit');
        Route::post('/profile/update',[ProfileController::class,'update'])->name('admin.profile.update');

    });
});
