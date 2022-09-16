<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForPatientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScienceController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/search', [MainController::class, 'search'])->name('search');

Route::prefix('about')->controller(AboutController::class)->name('about.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/history', 'history')->name('history');
  Route::get('/wealth', 'wealth')->name('wealth');
  Route::get('/career', 'career')->name('career');
});

Route::prefix('products')->controller(ProductController::class)->name('products.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/all', 'all')->name('all');
  Route::get('/{slug}', 'show')->name('show');
  Route::get('/nosology/{slug}', 'nosology')->name('nosology');
  Route::get('/atx/{slug}', 'atx')->name('atx');
});

Route::prefix('science')->controller(ScienceController::class)->name('science.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/categories/{slug}', 'showCategory')->name('categories.show');
});

Route::prefix('for-patients')->controller(ForPatientsController::class)->name('for-patients.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/videos', 'videos')->name('videos');

  Route::get('/posts', 'posts')->name('posts');
  Route::get('/posts/categories/{slug}', 'showCategory')->name('categories.show');
});

Route::prefix('posts')->controller(PostController::class)->name('posts.')->group(function () {
  Route::get('/{slug}', 'show')->name('show');
});


Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('/', [MainController::class, 'dashboard'])->name('dashboard.index');
});

require __DIR__ . '/auth.php';
