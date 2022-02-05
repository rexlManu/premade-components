<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\StartpageController;
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

Route::get('/', [StartpageController::class, 'index'])->name('categories.index');
Route::get('/components/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/ui-elements/{element}', [ElementController::class, 'show'])->name('elements.show');

Route::redirect('/redirect/github', 'https://github.com/rexlManu/premade-components')->name('redirect.github');
