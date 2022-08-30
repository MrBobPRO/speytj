<?php

use App\Http\Controllers\MainController;
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

Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('/', [MainController::class, 'dashboard'])->name('dashboard.index');
});

require __DIR__ . '/auth.php';
