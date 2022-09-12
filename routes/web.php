<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
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
  Route::get('/posts/{slug}', 'posts.show')->name('posts.show');
});


Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('/', [MainController::class, 'dashboard'])->name('dashboard.index');
});

require __DIR__ . '/auth.php';
